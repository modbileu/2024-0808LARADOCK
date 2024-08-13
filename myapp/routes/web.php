<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=> 'user'], function () {
    Route::group(['prefix' => 'auth'], function ()  {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login')->name('user.auth.login');
        Route::post('login','App\Http\Controllers\UserAuthController@LoginProcess');
        Route::get('signup', 'App\Http\Controllers\UserAuthController@Signup')->name('user.auth.signup');
        Route::post('signup','App\Http\Controllers\UserAuthController@SignupProcess');
        Route::get('signout','App\Http\Controllers\UserAuthController@SignOut')->name('user.auth.signout');
        Route::get('home','App\Http\Controllers\UserAuthController@Home');
    });
});