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

Route::get('/', function () {
    return view('welcome');
});

Route::any('procurarProdutos', 'produtosController@procurarProdutos')->name('procurarProdutos');

Route::get('listaProdutos', 'produtosController@listarProdutos');

Route::get('detalhesProdutos/{id}', 'produtosController@detalhesProdutos');

Route::get('cadastrarProduto', 'produtosController@cadastrarProdutos');


Route::post('addImagem', 'produtosController@cadastrarProdutos')->name('addImagem');



Route::get('deletarProdutos/{id}', 'produtosController@deletarProdutos');



Route::get('editarImagem/{id}', 'produtosController@edit');


Route::get('updateImagem/{id}', 'produtosController@update');

