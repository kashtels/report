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

		return view('lista_dinamica.index', array('paises' => $paises));
	
    }

    	public function consultar()
	{
			
	}
}
