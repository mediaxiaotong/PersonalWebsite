<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class UpdatePassRequest extends Request
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
            'password_o' => 'required',
            'password' => 'required|between:6,20|confirmed',
        ];
    }


    public function messages()
    {
        return [
            'password_o.required'=>'原密码不能为空',
            'password.required'=>'新密码密码不能为空',
            'password.between'=>'新密码必须在6-20位之间',
            'password.confirmed'=>'新密码密码不能为空',
        ];
    }
}
