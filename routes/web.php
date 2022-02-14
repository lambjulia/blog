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

Route::get('/searchprot', 'HomeController@searchprot');

Route::get('/search', 'HomeController@search');

Route::get('/cadastro', 'RegistroController@create')->name('cadastrouser');

Route::post('/cadastro', 'RegistroController@store')->name('store_user');



Route::get('/index', 'PessoasController@index')->name('pessoas');

Route::get('/cadastro', 'GhostController@create')->name('cadastro');

Route::get('/cadastrop', 'PessoasController@cadastro')->name('cadastro');

Route::post('/save', 'PessoasController@store')->name('store');

Route::get('/cadastro/ver/{id}', 'PessoasController@show')->name('show');

Route::get('/cadastro/edit/{id}', 'PessoasController@edit')->name('edit');

Route::post('/cadastro/{id}', 'PessoasController@update')->name('alterar_cadastro');

Route::delete('/delete/{id}',  'PessoasController@delete');


Route::get('/cadastroprot', 'ProtocoloController@create')->name('cadastro_protocolo');

Route::post('/saveprot', 'ProtocoloController@store')->name('store_protocolo');

Route::get('/cadastroprot/ver/{numeroprot}', 'ProtocoloController@show')->name('showprot');

Route::get('/cadastroprot/edit/{numeroprot}', 'ProtocoloController@edit')->name('editprot');

Route::post('/cadastroprot/{numeroprot}', 'ProtocoloController@update')->name('alterar_protocolo');

Route::delete('/deleteprot/{numeroprot}',  'ProtocoloController@delete');

Route::get('/lista', 'ProtocoloController@index')->name('protocolo');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{error?}', 'LoginController@login')->name('login');

Route::post('/', 'LoginController@autenticar')->name('login');






