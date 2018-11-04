<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CorreoController extends Controller
{
    public function index(){
        return view('correo.index');
    }
}
