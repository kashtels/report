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

//Inicio
Route::get("/", "InicioController@index");


//Empresa
Route::get("/empresa", "EmpresaController@index");



// Empresa (Correo)
Route::get('empresa_cc', [
	'uses' => 'EmpresaController@empresa_cc',
	'as' => 'empresa_cc'
	]);

		// Empresa (Sin Correo)

Route::get('empresa_sc', [
	'uses' => 'EmpresaController@empresa_sc',
	'as' => 'empresa_sc'
	]);

//Pais

		// País (Correo)

Route::get('pais_sc', [
	'uses' => 'PaisController@pais_sc',
	'as' => 'pais_sc'
	]);

		// Pais (Sin Correo)

Route::get('pais_sc', [
	'uses' => 'PaisController@pais_sc',
	'as' => 'pais_sc'
	]);
