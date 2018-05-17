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
    return view('welcome');
});

Route::get('/sobre', function() {
    return "Lets go to the beach, enjoy the girls"; 
});

Route::get('/produto', "ProdutoController@lista");

Route::get('/produto/mostra/{id}', "ProdutoController@mostra");