<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed|max:18',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'用户名不能为空',
            'name.max'=>'您的名字也太长了吧',
            'email.required'=>'你把你的email地址搞空了你怎么登录呢?',
            'email.email'=>'邮箱格式错误',
            'email.max'=>'您的邮箱太长了吧',
            'email.unique'=>'此邮箱已被注册',
            'password.required'=>'密码不能为空',
            'password.min'=>'您的密码不够长',
            'password.confirmed'=>'密码与确认密码不一致',
            'password.max'=>'您的密码也太长了吧',

        ];
    }
}
