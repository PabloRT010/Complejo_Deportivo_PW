@extends('layouts.header')
@section('contenido')

<h2>Bienvenido a la web de reservas deportivas!</h2>
<h4><a href=" {{route('inicio')}}" title="Inicio">Inicio</a></h4>
<h4><a href=" {{route('login')}}" title="login">Inicia Sesión</a></h4>
<h4><a href=" {{route('registro')}}" title="registro">Registrate</a></h4>

@endsection