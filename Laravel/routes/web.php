<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Category;

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

Auth::routes();

Route::get('/login', 'SessionsController@create')
->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/ol', function () {
    return view('sejaBemVindo');
});

Route::get('/mylogin', function() {
    return view('myLogin');
})->name('mylogin');

Route::get('/cadastro', 'UsersController@create')
->name('pagina_cadastro');

Route::post('/cadastro', 'UsersController@store');

Route::get('/home', 'CategoryController@index')
->name('home');

Route::get('perfil', 'productController@indexPerfil');

Route::get('/termosprivacidade', function() {
    $categorias = Category::all();
    return view('termosPrivacidade', compact('categorias'));
})->name('termos');

Route::get('/categorias/{id}', 'CategoryController@listarCategorias');

Route::get('/cadastroProduto', 'productController@create')->name('Produtos');

Route::post('/cadastroProduto', 'productController@store');


Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');


Route::get('/carrinho/adicionar', function () {
    return view('carrinho');
});

Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');


Route::get('destroy/{id}', 'productController@destroy');

Route::get('/detalheProduto/{id}', 'productController@detalhes');
Route::get('teste/{id}', 'CategoryController@listarCategorias');

