<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginRequest;
use App\Model\Admin;
use Code;
use Illuminate\Support\Facades\Crypt;

class LoginController extends CommonController
{
    //后台登陆控制器
    public function loginView()
    {
        return view('admin.login');
    }

    public function login(AdminLoginRequest $request)
    {
        if($input = $request->all())
        {
            $code = new Code();
            $_code = $code->get();
            if(strtoupper($input['code'])!=$_code)
            {
                return back()->with('errors','验证码错误');
            }
            $admin = Admin::first();
            if($admin->name != $input['name'] || Crypt::decrypt($admin->password) != $input['password'])
            {
                return back()->with('errors','账号密码错误');
            }
            @session(['isAdmin' => 1]);

            return redirect('admin/index');
        }
        else
        {
            return view('admin.login');
        }
    }

    public function code()
    {
        $code = new Code();
        echo $code->make();
    }
}
