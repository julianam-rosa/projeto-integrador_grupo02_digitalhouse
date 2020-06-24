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

Route::get('/ol', function () {
    return view('sejaBemVindo');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/cadastro', 'UsersController@create')
->name('pagina_cadastro');

Route::post('/cadastro', 'UsersController@store');

Route::get('/home', function() {
    return view('home');
});

Route::get('/perfil', function() {
    return view('perfilArtista');
});

Route::get('/termosprivacidade', function() {
    return view('termosPrivacidade');
})->name('termos');

Route::get('/categorias/almofadas', 'CategoryController@listarAlmofadas')
->name('categoria-almofadas');

Route::get('/categorias/bolsas', 'CategoryController@listarBolsas')
->name('categoria-bolsas');

Route::get('/categorias/cadernos', 'CategoryController@listarCadernos')
->name('categoria-cadernos');

Route::get('/categorias/camisetas', 'CategoryController@listarCamisetas')
->name('categoria-camisetas');

Route::get('/categorias/canecas', 'CategoryController@listarCanecas')
->name('categoria-canecas');

Route::get('/categorias/cartoes', 'CategoryController@listarCartoes')
->name('categoria-cartoes');

Route::get('/categorias/cases', 'CategoryController@listarCases')
->name('categoria-cases');

Route::get('/categorias/chinelos', 'CategoryController@listarChinelos')
->name('categoria-chinelos');

Route::get('/categorias/leggins', 'CategoryController@listarLeggins')
->name('categoria-leggins');

Route::get('/categorias/magnetos', 'CategoryController@listarMagnetos')
->name('categoria-magnetos');

Route::get('/categorias/meias', 'CategoryController@listarMeias')
->name('categoria-meias');

Route::get('/categorias/posters', 'CategoryController@listarPosters')
->name('categoria-posters');

Route::get('/prod-det', function() {
    return view('produtodetalhado');
});

Route::get('/finalizarcompra', function() {
    return view('finalizarcompra');
});