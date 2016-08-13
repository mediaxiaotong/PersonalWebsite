<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class CreateMessageReuqest extends Request
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
            'content' => 'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'content.required'=>'请填写内容！ ',
            'content.max'=>'混蛋，你输入的字太多了，这样霸屏不好',
        ];
    }
}
