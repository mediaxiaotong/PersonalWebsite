<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdatePassRequest;
use App\Model\Admin;
use Illuminate\Support\Facades\Crypt;


class AdminsController extends CommonController
{
    //更改密码
    public function index()
    {
        return view('admin.pass');
    }
    public function pass(UpdatePassRequest $request)
    {
        if($input = $request->all())
        {
            $admin = Admin::first();
            $_password = Crypt::decrypt($admin->password);
            //return $_password;
            if($_password == $input['password_o'])
            {
                $admin->password = Crypt::encrypt($input['password']);
                $admin->update();
                return back()->with('errors','密码修改成功');
            }
            else
            {
                return back()->with('errors','原密码错误');
            }
        }
        else
        {
            return redirect('admin/pass');
        }
    }
}
