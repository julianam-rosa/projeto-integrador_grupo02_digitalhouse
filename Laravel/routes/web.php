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

Route::get('/cadastro', function() {
    return view('cadastro');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/perfil', function() {
    return view('perfilArtista');
});

Route::get('/termosprivacidade', function() {
    return view('termosPrivacidade');
})->name('termos');

Route::get('/categorias/almofadas', function() {
    return view('categorias/almofadas');
})->name('categoria-almofadas');

Route::get('/categorias/bolsas', function() {
    return view('categorias/bolsas');
})->name('categoria-bolsas');

Route::get('/categorias/cadernos', function() {
    return view('categorias/cadernos');
})->name('categoria-cadernos');

Route::get('/categorias/camisetas', function() {
    return view('categorias/camisetas');
})->name('categoria-camisetas');

Route::get('/categorias/canecas', function() {
    return view('categorias/canecas');
})->name('categoria-canecas');

Route::get('/categorias/cartoes', function() {
    return view('categorias/cartoes');
})->name('categoria-cartoes');

Route::get('/categorias/cases', function() {
    return view('categorias/cases');
})->name('categoria-cases');

Route::get('/categorias/chinelos', function() {
    return view('categorias/chinelos');
})->name('categoria-chinelos');

Route::get('/categorias/leggins', function() {
    return view('categorias/leggins');
})->name('categoria-leggins');

Route::get('/categorias/magnetos', function() {
    return view('categorias/magnetos');
})->name('categoria-magnetos');

Route::get('/categorias/meias', function() {
    return view('categorias/meias');
})->name('categoria-meias');

Route::get('/categorias/posters', function() {
    return view('categorias/posters');
})->name('categoria-posters');
