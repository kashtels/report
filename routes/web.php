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

Route::get("/", [
	'uses'	=> 	'InicioController@index',
	'as'	=>	'/'
	]);



		// Correos

Route::get('correo', [
	'uses' => 'CorreoController@index',
	'as' => 'correo'
	]);

		// Lista Dinamicas

Route::get('lista_dinamica', [
	'uses' => 'ListaDinamicaController@index',
	'as' => 'lista_dinamica'
	]);


	/*
	|--------------------------------------------------------------------------
	| Reporte CEO
	|--------------------------------------------------------------------------
	|
	*/


// pagina de inicio para Reporte sEO
Route::get("/reporte_seo", "ReporteSEOController@index");

