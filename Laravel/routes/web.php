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
->name('pagina_cadastro')->middleware('guest');

Route::post('/cadastro', 'UsersController@store')->middleware('guest');

Route::get('/','HomeController@index')->name('home');

Route::get('/home', 'CategoryController@index')
->name('home');

Route::get('perfil', 'productController@indexPerfil')->name('Perfil')->middleware('auth');

Route::get('/termosprivacidade', function() {
    $categorias = Category::all();
    return view('termosPrivacidade', compact('categorias'));
})->name('termos');

Route::get('/categorias/{id}', 'CategoryController@show');

Route::get('/cadastroProduto', 'productController@create')->name('Produtos')->middleware('auth');

Route::post('/cadastroProduto', 'productController@store')->middleware('auth');


Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index')->middleware('auth');


Route::get('/carrinho/adicionar', function () {
    return view('carrinho');
});

Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar')->middleware('auth');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover')->middleware('auth');


Route::get('destroy/{id}', 'productController@destroy')->middleware('auth');

Route::get('edit/{id}', 'productController@edit')->middleware('auth');

Route::post('update/{id}', 'productController@update')->middleware('auth');

Route::get('/detalheProduto/{id}', 'productController@detalhes');

Route::get('/crudCategorias', 'CategoryController@indexcrud')->middleware('checkAdmin');

Route::get('/crudCategorias', 'CategoryController@createCrudeCategorias')->middleware('checkAdmin');

Route::post('/crudCategorias', 'CategoryController@store')->middleware('checkAdmin');

Route::get('destroi/{id}', 'CategoryController@destroi')->middleware('checkAdmin');

Route::get('editUser/{id}', 'UsersController@edit')->middleware('auth');

Route::post('updateUser/{id}', 'UsersController@update')->middleware('auth');