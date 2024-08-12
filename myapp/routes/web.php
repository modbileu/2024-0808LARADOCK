<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=> 'user'], function () {
    Route::group(['prefix' => 'auth'], function ()  {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login');
        Route::post('login','App\Http\Controllers\UserAuthController@LoginProcess');
        Route::get('signup', 'App\Http\Controllers\UserAuthController@Signup');
        Route::post('signup','App\Http\Controllers\UserAuthController@SignupProcess');
    });
});