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

    public function Home()
    {
        $binding = [
        'title' => '綠盾油漆'
        ];
        return view('auth.home',$binding);
        
    }

    public function SignOut()
    {
        session()->forget('user_id');
        // session()->forget('user_id');
        session()->flush();
        return redirect('/user/auth/login');
    }

    public function LoginProcess()
    {
        $form_data = request()->all();
        //dd($form_data);
        $user = User::where('email', $form_data['email'])->FirstOrFail();
        if (Hash::check($form_data['password'], $user->password)){
            echo '登入成功'; 
            session()->put('user_id', $user->id);
            session()->put('user_email',$user->email);
            #導向到首頁(本來要做的)
            return redirect('/user/auth/home');
        }else{
            echo '登入失敗';
            return redirect('/user/auth/login')
            ->withInput()
            ->withErrors(['無此帳號','帳號密碼錯誤']);
        }
        // $form_data = request()->all();
        // dd($form_data);
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
            return redirect('/user/auth/home');
        }
    }
}