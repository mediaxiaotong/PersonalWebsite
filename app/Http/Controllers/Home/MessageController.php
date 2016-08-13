<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\User\CreateMessageReuqest;
use App\Model\Message;


class MessageController extends CommonController
{
    //
    public function index()
    {
        $message = Message::orderBy('created_at','desc')->paginate(7);
        return view('home.message',compact('message'));
    }

    public function message(CreateMessageReuqest $request)
    {
        $input = $request->except('_token');
        $input['user_id'] = session('userId');
        if($input)
        {
            Message::create($input);
        }
        return back()->with('errors',' <div class="alert alert-success">留言成功，感谢支持！！</div>');

    }
}
