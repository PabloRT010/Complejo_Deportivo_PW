@extends('layouts.header')
@section('contenido')

<body>
    <div class = cuerpo>
        <h1>Registro de usuario</h1>
        <form action="../controllers/InsertarUsuario_Controller.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>
            
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required><br><br>
            
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" required><br><br>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required><br><br>
            
            <label for="es_mant">¿Es Mantenedor?</label>
            <input type ="checkbox" name="es_mant"><br><br>
            
            <input type="submit" class = boton value="Registrar">

        </form>
    </div>
    <h4><a href=" {{route('inicio')}}" title="Inicio">Volver</a></h4>
    
</body>
</html>



@endsection