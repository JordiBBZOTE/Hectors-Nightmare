@extends('layouts.scores')

@section('title', 'scores')

@section('content')
<div class="supercontainer">



    <div class="TituloBanner">
    <h1>TABLA DE POSICIONES</h1>
        
    <?php
        if($resultados->num_rows > 0) {
        echo "<table class='ranking' border='1'>";
        echo "<tr><th>Lugar</th><th>Usuario</th><th>Tiempo/s</th><th>Puntaje</th></tr>"; 
        
        $cont = 1;
        while($fila = $resultados->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $cont . "</td>";   // Ajusta los nombres de las columnas según tu tabla
            echo "<td>" . $fila["username"] . "</td>"; 
            echo "<td>" . $fila["time"] . "</td>";
            echo "<td>" . $fila["score"] . "</td>";
            echo "</tr>";
            $cont++;
        }

        echo "</table>";
    } else {
        echo "0 resultados.";
    }
    ?>
    <br>
   <h2>Mi puntuacion</h2>
   <?php
    if($miResultado->num_rows > 0) {
        echo "<table class='ranking' border='1'>";
        echo "<tr><th>Lugar</th><th>Usuario</th><th>Tiempo/s</th><th>Puntaje</th></tr>";  // Suponiendo que tienes estas columnas en tu tabla
            $rank = $ranking->fetch_assoc();
        while($fila = $miResultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $rank["position"] . "</td>";   // Ajusta los nombres de las columnas según tu tabla
            echo "<td>" . $fila["username"] . "</td>"; 
            echo "<td>" . $fila["time"] . "</td>";
            echo "<td>" . $fila["score"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 resultados.";
    }




    ?>

</div>

@endsection