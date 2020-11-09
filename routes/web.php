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

Route::get('/', 'PruebaController@welcome');
Route::get('/pintores', 'PruebaController@pintores');

//Pintores
Route::get('/frida', [
    'uses' => 'PruebaController@frida',
    'as' => 'frida'
]);

Route::get('/frida', [
    'uses' => 'PruebaController@frida',
    'as' => 'frida'
]);

Route::get('/gustav', [
    'uses' => 'PruebaController@gustav',
    'as' => 'gustav'
]);

Route::get('/salvador', [
    'uses' => 'PruebaController@salvador',
    'as' => 'salvador'
]);

Route::get('/vicent', [
    'uses' => 'PruebaController@vicent',
    'as' => 'vicent'
]);

//Login
Route::get('/', 'PruebaController@login');


Route::post('/valida', 'PruebaController@validarLogin');
