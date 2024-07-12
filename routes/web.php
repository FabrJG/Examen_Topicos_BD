<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','home')->name('home');

Route::view('ingreso','ingreso')->name('ingreso');

Route::get('listado','App\Http\Controllers\ListadoController@index')->name('listado.index');

Route::get('listado/crear','App\Http\Controllers\ListadoController@create')->name('listado.create');

Route::post('listado','App\Http\Controllers\ListadoController@store')->name('listado.store');

Route::get('listado/{nombre}','App\Http\Controllers\ListadoController@show')->name('listado.show');