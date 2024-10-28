<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Distancia recorrida por un automóvil</title>
</head>

<body>
    <?php
    // Ejercicio 6: Dos personas
    echo "<h1>Ejercicio 6: Dos personas</h1>";
    $distanciaInicial = 100; // Ejemplo de distancia inicial
    $velocidadA = 5; // Ejemplo de velocidad de la persona A
    $velocidadB = 3; // Ejemplo de velocidad de la persona B
    echo "<table border='1'>";
    echo "<tr><th>Tiempo (segundos)</th><th>Distancia A (metros)</th><th>Distancia B (metros)</th></tr>";
    $tiempo = 0;
    $distanciaA = 0;
    $distanciaB = $distanciaInicial;
    while ($distanciaA < $distanciaB) {
        $tiempo += 2;
        $distanciaA += $velocidadA * 2;
        $distanciaB -= $velocidadB * 2;
        echo "<tr><td>$tiempo</td><td>$distanciaA</td><td>$distanciaB</td></tr>";
    }
    echo "</table>";
    echo "<p>Las personas se encuentran en $tiempo segundos.</p>";
    ?>

</body>

</html>