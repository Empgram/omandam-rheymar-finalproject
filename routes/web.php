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

Route::get('connect', function () {
    return view('connect');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('register', function () {
    return view('register');
});


Route::get('login', function () {
    return view('login');
});
Route::get('login1', function () {
    return view('login1');
});
Route::get('User', function () {
    return view('User');
});
Route::get('page', function () {
    return view('page');
});
Route::get('delete', function () {
    return view('delete');
});
Route::get('update', function () {
    return view('update');
});
Route::get('update1', function () {
    return view('update1');
});

