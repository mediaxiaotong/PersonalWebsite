<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class IndexController extends CommonController
{
    public function index()
    {
        return view('backend.index');
    }

    public function info()
    {
        return view('backend.info');
    }

    public function quit()
    {
        Session::forget('isAdmin');
        Session::forget('adminName');
        return redirect('backend/login');
    }
}
