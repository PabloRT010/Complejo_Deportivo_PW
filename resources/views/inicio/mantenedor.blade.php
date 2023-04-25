@extends('layouts.header')
@section('contenido')

<head>
    <title>Vista de mantenedor</title>
</head>
<body>
    <?php
        $username = "cursophp";
        $password = "";
        $database = "BD_P1_V2";
        $conexion = mysqli_connect("127.0.0.1", $username, $password, $database);
       
        echo "<br>";
        echo "<br>";

        echo "<h3>Todas nuestras pistas: </h3>";

        $consulta = mysqli_query($conexion, "SELECT id_pista, correo_usuario, fecha, h_ini, h_fin, ocupada FROM pista");

        echo "<table text-aling:center; border=1>";

        echo "<tr>";
        echo "<th>Nº pista</th>";
        echo "<th>Usuario</th>";
        echo "<th>Fecha</th>";
        echo "<th>Hora Inicio</th>";
        echo "<th>Hora fin</th>";
        echo "<th>Ocupada</th>";

        echo "</tr>";
        $nfilas = mysqli_num_rows($consulta);
        if ($nfilas > 0)
        {
        echo "<tr>"; 

        for ($i = 0; $i < $nfilas; $i++)
        {   
            $ncolumnas = mysqli_num_fields($consulta);
            $fila = mysqli_fetch_array($consulta);
            for ($j = 0; $j < $ncolumnas; $j++)
            {
                if($j == 5){
                    if($fila["ocupada"] == 1)
                    echo "<td>OCUPADA</td>";
                else
                echo "<td>LIBRE</td>";
                }
                else
                echo "<td>$fila[$j]</td>";
                

                
            }
            echo "</tr>";
        }
        
        }
        else
        {
        echo "Consulta sin resultados";
        }

        echo "</table>";
        echo "<br>";

        mysqli_close($conexion);

    ?>
<h4><a href=" {{route('inicio')}}" title="Inicio">Volver</a></h4>
</body>
</html>

@endsection