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
    return view('home');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/alert', function () {
    return view('alert');
});

Route::get('/trigger-alert', function () {
    return redirect('alert')->with('alert', 'SweetAlert2 is very sweet!');
});