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

/*Route::get('/', function () {
    return view('tela_entrada.home');
}); */

Route::get('/', function () {
    return view('principal',$menu = ['menu' => 1]);
})->name('home');

Route::group(['prefix' => '/paciente/'], function () {
    
    Route::get('cadastro', 'PacienteController@tela_cadastro')->name("cadastro.paciente");
    Route::post('cadastrar', 'PacienteController@cadastrar_paciente')->name("cadastrar.paciente");
    Route::get('pesquisa', 'PacienteController@tela_pesquisa')->name("pesquisa.paciente");
    Route::get('logout', 'LoginController@deslogando')->name("deslogando");
    
});

Route::group(['prefix' => '/consulta/'], function () {
    
    Route::get('cadastro', 'ConsultaController@tela_cadastro')->name("cadastro.consulta");
    Route::post('cadastrar', 'ConsultaController@cadastrar_consulta')->name("cadastrar.consulta");
    Route::get('pesquisa', 'ConsultaController@tela_pesquisa')->name("pesquisa.consulta");
    Route::get('logout', 'LoginController@deslogando')->name("deslogando");
    
});

Route::get('/usuario/cadastro', 'UsuarioController@tela_cadastro')->name("cadastro.usuario");