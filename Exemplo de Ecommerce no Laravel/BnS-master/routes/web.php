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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Product related routes
Route::get('/', "ProductsController@index");

Route::get('/details/{id}',"ProductsController@show");

Route::get('/sell',"ProductsController@create");
Route::get('/edit/{id}',"ProductsController@edit");

Route::post('/update/{id}',"ProductsController@update");
Route::post('/create',"ProductsController@store");


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
