<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', 'AuthController@getLogin')->name('auth.getLogin');


// Login Page Return
Route::get('/login', function () {
    return view('login');
});

// Recommend Book Step1 Return
Route::get('/recommend_book', function () {
    return view('recommend_step1');
});

// Recommend Book Step2 Return
Route::get('/recommend_book_2', function () {
    return view('recommend_step2');
});

// mybookmark Return
Route::get('/mybookmarks', function () {
    return view('mybookmarks');
});