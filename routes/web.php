<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Authentication routes
Route::get('/auth', 'AuthController@login')->name('login');
Route::post('/auth', 'AuthController@login')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');
