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

<<<<<<< HEAD
Route::get("/", [
	'uses'	=> 	'InicioController@index',
	'as'	=>	'/'
	]);
=======
>>>>>>> ad2b7f33e85bc884c2275a718ab475da1aa898c6

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

<<<<<<< HEAD
		// Lista Dinamicas

Route::get('lista_dinamica', [
	'uses' => 'ListaDinamicaController@index',
	'as' => 'lista_dinamica'
	]);
=======











	/*
	|--------------------------------------------------------------------------
	| Reporte CEO
	|--------------------------------------------------------------------------
	|
	*/



// pagina de inicio para Reporte sEO
Route::get("/reporte_seo", "ReporteSEOController@index");
>>>>>>> ad2b7f33e85bc884c2275a718ab475da1aa898c6
