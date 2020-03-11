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

Route::get('/register', 'indexController@register')->name('register');
Route::post('/register', 'indexController@registerprocess');

Route::get('/login', 'indexController@login')->name('login');
Route::post('/login', 'indexController@loginprocess');

Route::get('/verify/{token}', 'indexController@verifyEmail')->name('verify');


