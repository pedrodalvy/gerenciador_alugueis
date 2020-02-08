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

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');

    Route::group(['prefix' => 'proprietarios'], function () {
        Route::get('/', 'Admin\ProprietariosController@index')->name('proprietarios.index');
    });

    Route::group(['prefix' => 'inquilinos'], function () {
        Route::get('/', 'Admin\InquilinosController@index')->name('inquilinos.index');
    });


    Route::resource('pessoas', 'Admin\PessoasController');
    Route::resource('imovel', 'Admin\ImoveisController');

});