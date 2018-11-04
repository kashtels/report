<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ListaDinamicaController extends Controller
{
        public function index()
    {	
		$paises = DB::select('select * from agentes.pais order by pais asc');
		$empresas = DB::select('select empresa.nombre, empresa.web, pais.pais from agentes.empresa, agentes.pais where agentes.empresa.id_pais_fk = agentes.pais.id_pais_pk order by pais asc');
		
		$total_empresas = DB::select('select id_empresa_pk from agentes.empresa');
		$total_empresas = count($total_empresas);
		
		$com = "'";
		$text = 'offic';


		return view('lista_dinamica.index', array('paises' => $paises, 'empresas' => $empresas))
		->with('total_empresas', $total_empresas);
	
    }

    	public function consultar()
	{
			
	}
}
