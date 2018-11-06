<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CorreoController extends Controller
{
    public function index(){

        $correos = DB::select('select agentes.correo.correo, agentes.empresa.nombre, agentes.empresa.web, agentes.pais.pais
        from agentes.correo inner join agentes.empresa on agentes.correo.id_empresa_fk = agentes.empresa.id_empresa_pk
        inner join agentes.pais on agentes.empresa.id_pais_fk = agentes.pais.id_pais_pk
        order by pais asc');

        return view('correo.index', array('correos' => $correos));
    }
}
