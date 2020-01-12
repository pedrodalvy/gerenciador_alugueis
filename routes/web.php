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
    Route::resource('imovel', 'Admin\ImoveisController');
    Route::resource('proprietarios', 'Admin\ProprietariosController');
    Route::resource('inquilinos', 'Admin\InquilinosController');
    Route::resource('pessoas', 'Admin\PessoasController');

//    Route::get('imovel/gerar/{id}', 'Test\TestFakerController@geradorImoveis');
//    Route::get('proprietarios/gerar/{id}', 'Test\TestFakerController@geradorPropietarios');
//    Route::get('inquilinos/gerar/{id}', 'Test\TestFakerController@geradorInquilinos');
});
