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
    return view('index');
});

Route::get('/lights', function () {
    return view('lights');
});

Route::get('/docs', function () {
    return view('docs');
});

Route::get('/devices', 'DevicesController@index');
Route::get('/devices/{device}', 'DevicesController@show');
