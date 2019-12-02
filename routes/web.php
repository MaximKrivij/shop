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
// Маршруты сброса пароля...
Route::get('password/email', 'Auth\PasswordController@getEmail')->middleware('auth');;
Route::post('password/email', 'Auth\PasswordController@postEmail')->middleware('auth');;
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->middleware('auth');;
Route::post('password/reset', 'Auth\PasswordController@postReset')->middleware('auth');;
/*...*/
Auth::routes();
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/products', function () {
    return view('products');
});

Route::get('/', function () {
    return view('welcome');
});



