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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','ControllerPrueba@index')->name('prueba.index');

Route::get('/ejemplo2','ControllerPrueba@ejemplo2')->name('prueba.ejemplo2');

Route::post('/ejemplo2_res','ControllerPrueba@ejemplo2_res')->name('prueba.ejemplo2_res');