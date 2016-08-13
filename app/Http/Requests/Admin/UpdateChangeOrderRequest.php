<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class UpdateChangeOrderRequest extends Request
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
            'order' => 'required',
            'order' => 'numeric',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'排序不能为空',
            'name.numeric'=>'排序只能是数字',
        ];
    }
}
