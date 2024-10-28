<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Distancia recorrida por un automóvil</title>
</head>
<body>
    <?php
    // Ejercicio 5: Automóvil
    echo "<h1>Ejercicio 5: Automóvil</h1>";
    $velocidad = 55; // Velocidad promedio en km/h
    $tiempoTotal = 4; // Tiempo total en horas

    echo "<h2>Distancia Recorrida Cada Media Hora</h2>";
    echo "<table border='1'>
<tr><th>Tiempo (horas)</th><th>Distancia (km)</th></tr>";

    for ($tiempo = 0.5; $tiempo <= $tiempoTotal; $tiempo += 0.5) {
        $distancia = $velocidad * $tiempo; // Calcula la distancia a cada media hora
        echo "<tr><td>" . number_format($tiempo, 1) . "</td><td>" . number_format($distancia, 2) . "</td></tr>";
    }

    echo "</table>";
    ?>

</body>
</html>