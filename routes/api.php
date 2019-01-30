<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/clientes', 'ClientesController@create')->name('create-clientes');

Route::post('/livros', 'LivrosController@create')->name('create-livros');

Route::get('/clientes','ClientesController@list')->name('lista-clientes');

Route::put('clientes/{id}','ClientesController@update')->name('update-clientes');

Route::put('livros/{id}','LivrosController@update')->name('update-alunos');