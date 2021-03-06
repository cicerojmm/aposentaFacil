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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pessoa', 'PessoaController@index');
Route::get('/emprego', 'EmpregoController@index');



Route::post('/pessoa/salvar', 'PessoaController@salvar');
Route::post('/emprego/salvar', 'EmpregoController@salvar');


Route::get('/pessoa/buscar/{id}', 'PessoaController@realizaCalculo');