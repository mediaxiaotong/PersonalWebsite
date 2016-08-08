<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateConfigRequest extends Request
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
            'name'=>'required',
            'title'=>'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'配置项名称不能为空！',
            'title.required'=>'配置项标题不能为空！',
        ];
    }
}
