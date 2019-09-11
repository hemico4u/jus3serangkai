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
Route::get('/jus3serangkai', function () {
    return view('welcome');
});

Route::get('jus3serangkai/{user}', 'UserController@index')->name('user');

Route::get('register', 'UserController@register')->name('register');
Route::post('submit', 'UserController@submit')->name('submit');
Route::get('info/{user}', 'UserController@info')->name('info');