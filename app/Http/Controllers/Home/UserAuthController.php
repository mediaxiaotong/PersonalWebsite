<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\User\CreateLoginRequest;
use App\Http\Requests\User\CreateRegisterRequest;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;


class UserAuthController extends CommonController
{
    public function index()
    {
        return view('home.user_login');
    }

    //账户登录
    public function login(CreateLoginRequest $request)
    {
        $input = $request->all();
        if($input)
        {
            $data = User::get();
            foreach ($data as $user)
            {
                if($user->email == $input['email'])
                {
                    if(Crypt::decrypt($user->password) == $input['password'])
                    {
                        session(['isLogin'=>1]);
                        session(['userId'=>$user->id]);
                        session(['userName' => $user->name]);
                        return redirect('home/index');
                    }
                    else
                    {
                        return back()->with('errors',' <p style="color:red;">°密码错误！</p>');//密码错误
                    }
                }
            }
            return back()->with('errors',' <p style="color:red;">°找不到该用户名！</p>');//找不到此用户

        }
    }

    //注册账户
    public function register(CreateRegisterRequest $request)
    {
        $input = $request->except('_token');
        $input['password'] = Crypt::encrypt($input['password']);

        if($input)
        {
            $data = User::create($input);
            return back()->with('errors',' <p style="color:deepskyblue;">°注册成功！</p>');
        }
        else
        {
            return back()->with('errors',' <p style="color:red;">°注册失败！</p>');
        }
    }

    public function quit()
    {
        Session::forget('isLogin');
        Session::forget('userId');
        Session::forget('userName');
        return redirect('home/index');
    }
}
