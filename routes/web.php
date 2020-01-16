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

Route::get('personas', 'PersonaController@inicio')->name('lista_personas');

Route::get('vehiculos', 'VehiculoController@inicio')->name('lista_vehiculos');
