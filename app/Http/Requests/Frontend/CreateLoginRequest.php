<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;

class CreateLoginRequest extends Request
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'用户名不能为空',
            'email.email'=>'邮箱账号格式错误',
            'password.required'=>'密码不能为空',
        ];
    }
}
