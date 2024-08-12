<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash; 

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
        if ($form_data['password'] == '' || $form_data['email'] == '' || $form_data['nickname'] == '') {
            return redirect('/user/auth/signup')
            ->withInput()
            ->withErrors(['資料不齊全','請檢查表單']);
        }else{
            #判斷帳號是否存在
            $user = User::where('email', $form_data['email'])->first();
            if (!is_null($user)) {
                return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors(['此帳號已被註冊','請更換帳號']);
            }
            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'type' => $form_data['type'],
                'nickname' => $form_data['nickname'],
            ]);
        //dd($user);
        }
    }
}