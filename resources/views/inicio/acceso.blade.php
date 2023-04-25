@extends('layouts.header')
@section('contenido')
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST["correo"];
        $contrasenna = $_POST["contrasenna"];
    
        if (!empty($correo) && !empty($contrasenna)) {


          $username = "cursophp";
          $password = "";
          $database = "web_reservas";
          $conexion = mysqli_connect("10.182.105.56", $username, $password, $database);

          $consulta = mysqli_query($conexion, "SELECT correo, contrasenna, es_mantenedor FROM Usuario");
          $nFilas = mysqli_num_rows($consulta);

          session_start();
          $_SESSION["correo"] = $_POST["correo"];

          $existeCorreo = false;
          $i = 0;

          $fila = mysqli_fetch_array($consulta);
          if ($fila[0] == $correo) $existeCorreo = true;

          while ($i < $nFilas-1 && !$existeCorreo)
          {
            $i++;

            $fila = mysqli_fetch_array($consulta);

            if ($fila[0] == $correo) $existeCorreo = true;

          }

          if ($existeCorreo == true)
          {
            if ($contrasenna == $fila[1])
            {
              if ($fila[2] == 1)
                header("Location: ./views/vista_mantenedor.php");
              else header ("Location: ./views/vista_cliente.php");
            }
            else
            { 
              echo "Contraseña incorrecta. Repita la contraseña.<br>";
              // Repita la contraseña
            }
          }
          else
          {
            header("Location: ./views/vista_usuario.php");
            // Envía a la página de registro
          }

        } else {
          echo "Por favor, rellene todos los campos.";
        }
      }
?>


<html lang="es">

    <body>
    
        <b>Inicio de sesi&oacute;n</b><br><br>
        <form action="" method="post">
            <label for="correo">Correo: </label>
            <input required type="text" name="correo" size=30 placeholder="Introduce tu correo electrónico...">
            <br><br>
            <label for="contrasenna">Contraseña: </label>
            <input required type="password" name="contrasenna" size=12>
            <br><br>
            <input type="submit" value="Entrar">
        </form>
        <h4><a href=" {{route('inicio')}}" title="Inicio">Volver</a></h4>
    </body>
</html>
@endsection