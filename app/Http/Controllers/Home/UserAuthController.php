<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserAuthController extends CommonController
{
    public function index()
    {
        return view('home.user_login');
    }

    public function login()
    {

    }

    public function register()
    {

    }

    public function quit()
    {

    }
}
