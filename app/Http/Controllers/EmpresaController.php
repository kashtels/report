<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller
{

    public function empresa_cc()
    {
        return view('empresa.cc');
    }

    public function empresa_sc()
    {
        return view('empresa.sc');
    }

    public function index(Request $request){


      $TotalAgenteWCA_HO = DB::select("select count(empresa) from agentes.empresa where network = 'www.wcaworld.com' and lower(nombre) like '%head%'; ");
      $TotalAgenteWCA_Sucursal = DB::select("select count(empresa) from agentes.empresa where network = 'www.wcaworld.com' and lower(nombre) not like '%head%'; ");

      $datos = [
        "TotalAgenteWCA_HO" => $TotalAgenteWCA_HO,
        "TotalAgenteWCA_Sucursal" => $TotalAgenteWCA_Sucursal
      ];

   	  return view('empresa.main', $datos);
    }



}
