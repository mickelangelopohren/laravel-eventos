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

Route::get('/', 'EventoController@index')->name('index');
Route::get('/detalhes/{id}', 'EventoController@detalhes')->name('detalhes');
Route::get('/comprar/{id}', 'EventoController@comprar')->name('comprar');
