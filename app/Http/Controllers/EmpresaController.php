<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller{


    public function index(Request $request){

      $contienente = DB::select("select * from agentes.continente order by continente");

      $TotalAgenteWCA_HO = DB::select("select count(empresa) from agentes.empresa where network = 'www.wcaworld.com' and lower(nombre) like '%head%'; ");
      $TotalAgenteWCA_Sucursal = DB::select("select count(empresa) from agentes.empresa where network = 'www.wcaworld.com' and lower(nombre) not like '%head%'; ");

      $datos = [
        "TotalAgenteWCA_HO" => $TotalAgenteWCA_HO,
        "TotalAgenteWCA_Sucursal" => $TotalAgenteWCA_Sucursal,
        "continente" => $contienente
      ];

   	  return view('empresa.main', $datos);
    }


    public function cargar_pais(Request $request){
      $cont =  $request->input("continente");
      $re = DB::select("select * from agentes.pais where id_continente_fk = '".$cont."'");
      print json_encode($re);
    }

    public function cargar_wca_lista(Request $request){
      $pais =  $request->input("pais");

      $TotalAgenteWCA_HO = DB::select("select count(empresa) from agentes.empresa where network = 'www.wcaworld.com' and id_pais_fk = '".$pais."' and lower(nombre) like '%head%'; ");
      $TotalAgenteWCA_Sucursal = DB::select("select count(empresa) from agentes.empresa where network = 'www.wcaworld.com' and id_pais_fk = '".$pais."' and lower(nombre) not like '%head%'; ");
      $empresa = DB::select("select * from agentes.empresa where id_pais_fk = '".$pais."'");

      $datos = [
        "empresa" => $empresa,
        "total_ho" => $TotalAgenteWCA_HO,
        "total_no_ho" => $TotalAgenteWCA_Sucursal
      ];

      print json_encode($datos);


    }


}
