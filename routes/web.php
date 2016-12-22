<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Home Routes
Route::get('/', 'HomeController@index')->name('index');


// Auth Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('loginform');
Route::post('login', 'Auth\LoginController@login')->name('login');

// Auth Logout
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Auth Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.get');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');

// Profile
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@updateAvatar');

// Posts
Route::resource('posts', 'BlogController');