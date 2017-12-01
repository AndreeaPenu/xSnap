<?php

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
    return view('welcome');
});

Route::get('/backdrop', function () {
    return view('backdrop');
});

Route::get('/takepicture', function () {
    return view('takepicture');
});

Route::get('/share', function () {
    return view('share');
});