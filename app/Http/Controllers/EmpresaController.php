<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    	// Consulta DB Empresa

      $empresa = DB::table('empresa')
            ->select('')           
            ->orderBy('')
            ->get();

        // Consulta DB Correo
            
      $correo = DB::table('empresa')
            ->select('')           
            ->orderBy('')
            ->get();


           	 return view('empresa.cc', array('$empresa' => $empresa))->with('correo',$correo);
    }
 
    

}
