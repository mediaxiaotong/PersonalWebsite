<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class AdminLoginRequest extends Request
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
            'name' => 'required',
            'password' => 'required',
            'code' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'账号不能为空',
            'password.required'=>'密码不能为空',
            'code.required'=>'验证码不能为空',
        ];
    }
}
