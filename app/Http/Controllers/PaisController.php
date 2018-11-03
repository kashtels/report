<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function pais_cc()
    {
        return view('pais.cc');
    }

    public function pais_sc()
    {
        return view('pais.sc');
    }
}
