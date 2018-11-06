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
	| Reporte Empresas
	|--------------------------------------------------------------------------
	|
	*/



//Empresa
Route::get("/empresa", "EmpresaController@index");

Route::post("/empresa/cargar_pais", "EmpresaController@cargar_pais");
Route::post("/empresa/cargar_wca_lista", "EmpresaController@cargar_wca_lista");


	/*
	|--------------------------------------------------------------------------
	| Reporte SEO
	|--------------------------------------------------------------------------
	|
	*/


// pagina de inicio para Reporte sEO
Route::get("/reporte_seo", "ReporteSEOController@index");

// carar timeline grafico
Route::post("/reporte_seo/cargar_timeline", "ReporteSEOController@timeline");
