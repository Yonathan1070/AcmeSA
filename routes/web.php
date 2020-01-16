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

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'personas'], function () {
    Route::get('', 'PersonaController@inicio')->name('lista_personas');
    Route::get('crear', 'PersonaController@crear')->name('crear_persona');
    Route::post('crear', 'PersonaController@guardar')->name('guardar_persona');
    Route::get('editar/{id}', 'PersonaController@editar')->name('editar_persona');
    Route::put('editar/{id}', 'PersonaController@actualizar')->name('actualizar_persona');
});

Route::get('vehiculos', 'VehiculoController@inicio')->name('lista_vehiculos');
