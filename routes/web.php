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

Route::get('/ol', function () {
    return view('sejaBemVindo');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/cadastro', function() {
    return view('cadastro');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/perfil', function() {
    return view('perfilArtista');
});

Route::get('/cat-case', function() {
    return view('categoria-case');
});

Route::get('/cat-chinelo', function() {
    return view('categoria-chinelo');
});

Route::get('/cat-leggins', function() {
    return view('categoria-leggins');
});

Route::get('/cat-magnetos', function() {
    return view('categoria-magnetos');
});

Route::get('/cat-meias', function() {
    return view('categoria-meias');
});

Route::get('/prod-det', function() {
    return view('produtodetalhado');
});

Route::get('/finalizarcompra', function() {
    return view('finalizarcompra');
});