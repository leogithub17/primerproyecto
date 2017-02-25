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

Route::get('hola/index','SitioController@index');
Route::get('hola/saludo/{nombre}','SitioController@saludar');


Route::get('/', function () {
    return view('welcome');
});
