<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio_Controller extends Controller
{
    public function index(){
        return view('inicio.inicio');
    }

    public function acceso(){
        return view('inicio.acceso');
    }

    public function registro(){
        return view('inicio.registro');
    }
}
