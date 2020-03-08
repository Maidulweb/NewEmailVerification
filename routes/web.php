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

Route::get('/', 'indexController@index')->name('index');

Route::get('/register', 'LoginRegisterController@register')->name('register');
Route::post('/register', 'LoginRegisterController@registerprocess');

Route::get('/login', 'LoginRegisterController@login')->name('login');
Route::post('/login', 'LoginRegisterController@loginprocess');
