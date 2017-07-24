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

// Home
Route::get('/', 'Home@index');

// Devices
Route::get('/devices', 'Devices@index');
Route::get('/devices/{device}', 'Devices@show');

// Lights
Route::get('/lights', 'Lights@index');
Route::get('/docs', 'Docs@index');

// Users
Route::get('/users', 'Users@index');
Route::get('/users/create', 'Users@create');
Route::get('/users/{user}', 'Users@show');
Route::post('/users', 'Users@store');

Route::get('/profile', 'Users@profile');
