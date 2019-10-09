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
    return view('darah');
});
// Route::get('/jus3serangkai', function () {
//     return view('welcome');
// });
// Route::get('/penyakit-jantung', function () {
//     return view('jantung');
// });
// Route::get('/darah-tinggi', function () {
//     return view('darah');
// });
// Route::get('/kencing-manis', function () {
//     return view('kencing');
// });

// Route::get('jus3serangkai/{user}', 'UserController@index')->name('user');

 Route::get('register', 'UserController@register')->name('register');
 Route::post('submit', 'UserController@submit')->name('submit');
Route::get('info/{user}', 'UserController@info')->name('info');
Route::post('gotoinfo', 'UserController@goto')->name('goto');


//Route::get('penyakit-jantung/{user}', 'UserController@jantung')->name('jantung');
 Route::get('darah-tinggi/{user}', 'UserController@darah')->name('darah');
// Route::get('kencing-manis/{user}', 'UserController@kencing')->name('kencing');

Route::get('wasap/{wasap}', 'UserController@wasap')->name('wasap');
Route::get('/staff', 'UserController@staff')->name('staff');