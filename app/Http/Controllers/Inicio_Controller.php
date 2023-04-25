<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio_Controller extends Controller
{
    public function index(){
        return view('inicio.inicio');
    }

    public function acceso(){
        return view('auth.login');
    }

    public function registro(){
        return view('auth.register');
    }

    public function cliente(){
        return view ('inicio.cliente');
    }

    public function mantenedor(){
        return view ('inicio.mantenedor');
    }
}
