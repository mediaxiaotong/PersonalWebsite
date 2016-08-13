<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\AdminLoginRequest;
use App\Model\Admin;
use Code;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LoginController extends CommonController
{
    /**
     * 返回管理员登录视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.login');
    }


    public function login(AdminLoginRequest $request)
    {
        //如果请求里包含数据,就处理,否在退回
        if($input = $request->all())
        {
            $code = new Code();
            $_code = $code->get();

            //如果验证码出错,就退回
            if(strtoupper($input['code'])!=$_code)
            {
                return back()->with('errors','验证码错误');
            }

            //查找用户是否存在并验证账户密码
            $admins = Admin::all();
            foreach ($admins as $admin)
            {
                //找到对应用户就设置好必要的session
                if($admin->name == $input['name'] && Crypt::decrypt($admin->password) == $input['password'])
                {
                    Session::put('isAdmin',1);
                    Session::put('adminName',$admin->name);
                    return redirect('backend');
                }
            }
            //如果没找到对应用户或者用户输入信息出错,就退回
            return back()->with('errors','账号或密码错误');
        }
        else
        {
            return view('backend.login');
        }
    }

    public function code()
    {
        $code = new Code();
        echo $code->make();
    }
}
