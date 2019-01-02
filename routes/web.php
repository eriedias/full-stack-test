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
    return view('login');
})->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\InicioController@index')->name('admin-inicio');

    Route::prefix('usuario')->group(function () {
        Route::get('/', 'Admin\UsuarioController@index')->name('lista-de-usuarios');
        Route::get('/cadastro', 'Admin\UsuarioController@create')->name('cadastro-de-usuario');
        Route::put('/cadastro', 'Admin\UsuarioController@store');
    });

});