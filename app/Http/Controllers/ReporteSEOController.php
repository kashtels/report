<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReporteSEOController extends Controller{

    public function index(){
      $dm = DB::select("select distinct(dominio) from posicionamiento.posicionamiento");

   	  return view('reporteSEO.main', ["dm" => $dm]);
    }


    private function posicion($valor){
      foreach ($valor as $key => $value) {
        $aux = ($value->pagina * 10 );
        $aux = ($aux - 10);
        $aux = ($aux + $value->posicion);

        if ($aux > 0){
          $valor[$key]->numero = $aux;
        }
        else{
          $valor[$key]->numero = 0;
        }


      }

      return $valor;
    }

    public function timeline(Request $request){
      $inicio = $request->input("inicio");
      $final  = $request->input("final");
      $dominio= $request->input("dominio");


      $kw   = DB::select("select distinct(keyword) from posicionamiento.posicionamiento where dominio = '".$dominio."' ");

      $pic   = DB::select("select * from posicionamiento.posicionamiento where dominio = '".$dominio."'  and  fecha between '".$inicio."' and '".$final."'");
      $pic   = $this->posicion($pic);




      print json_encode(["pic" => $pic, "kw" => $kw]);


    }

}
