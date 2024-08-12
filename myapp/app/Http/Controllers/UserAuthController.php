<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function Login()
    {
        $binding = [
        'title' => '登入頁面'
        ];
        return view('auth.login',$binding);
        
    }
    public function Signup()
    {
        $binding = [
            "title" => '註冊頁面'
        ];
        return view('auth.signup',$binding);
    }

    public function SignupProcess()
    {
        $form_data = request()->all();
        dd($form_data);
    }
}