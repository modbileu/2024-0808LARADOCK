<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function Login()
    {
        return 123456;
    }
    public function Signup()
    {
        $binding = [
            "title" => '註冊'
        ];
        return view('auth.signup',$binding);
    }
}