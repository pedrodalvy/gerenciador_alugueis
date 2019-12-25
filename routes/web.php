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


Route::group(['prefix' => '/inquilino'], function () {
    Route::get('/', 'InquilinosController@lista')->name('inquilinoListar');

    Route::get('cadastro', 'InquilinosController@formularioCadastrar')->name('inquilinoFormularioCadastrar');
    Route::post('cadastro', 'InquilinosController@cadastrar')->name('inquilinoCadastrar');

    Route::get('{id}/editar', 'InquilinosController@formularioEditar')->name('inquilinoFormularioEditar');
    Route::post('{id}/editar', 'InquilinosController@editar')->name('inquilinoEditar');

    Route::get('{id}/remover', 'InquilinosController@remover')->name('inquilinoRemover');
});


Route::group(['prefix' => '/imoveis'], function () {
    Route::get('/', 'ImoveisController@lista')->name('imovelListar');

    Route::get('cadastro', 'ImoveisController@formularioCadastrar')->name('imovelFormularioCadastrar');
    Route::post('cadastro', 'ImoveisController@cadastrar')->name('imovelCadastrar');

    Route::get('{id}/editar', 'ImoveisController@formularioEditar')->name('imovelFormularioEditar');
    Route::post('{id}/editar', 'ImoveisController@editar')->name('imovelEditar');

    Route::get('{id}/remover', 'ImoveisController@remover')->name('imovelRemover');
});


Route::group(['prefix' => '/proprietarios'], function () {
    Route::get('/', 'ProprietariosController@lista')->name('proprietariosListar');

    Route::get('cadastro', 'ProprietariosController@formularioCadastrar')->name('proprietariosFormularioCadastrar');
    Route::post('cadastro', 'ProprietariosController@cadastrar')->name('proprietariosCadastrar');

    Route::get('{id}/editar', 'ProprietariosController@formularioEditar')->name('proprietariosFormularioEditar');
    Route::post('{id}/editar', 'ProprietariosController@editar')->name('proprietariosEditar');

    Route::get('{id}/remover', 'ProprietariosController@remover')->name('proprietariosRemover');
});