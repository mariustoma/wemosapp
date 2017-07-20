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
	$title = 'Home Automation';
    return view('index', compact('title'));
});

Route::get('/devices', 'Devices@index');
Route::get('/devices/{device}', 'Devices@show');

Route::get('/lights', 'Lights@index');
Route::get('/docs', 'Docs@index');

Route::get('/users', 'Users@index');
Route::get('/users/{user}', 'Users@show');
Route::get('/profile', 'Users@profile');
