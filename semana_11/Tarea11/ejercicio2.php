<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Ejercicio 2: Notas de alumnos
    echo "<h1>Ejercicio 2: Notas de alumnos</h1>";
    $aprobados = 0;
    $desaprobados = 0;

    echo "<table border='1'>
<tr><th>Nro</th><th>Exp</th><th>Exf</th><th>Promedio</th></tr>";

    for ($i = 1; $i <= 25; $i++) {
        $exp = rand(0, 20); // Nota del examen parcial
        $exf = rand(0, 20); // Nota del examen final
        $promedio = ($exp + $exf) / 2; // Calcula el promedio

        // Contabiliza aprobados y desaprobados
        if ($promedio >= 11) {
            $aprobados++;
        } else {
            $desaprobados++;
        }

        echo "<tr><td>$i</td><td>$exp</td><td>$exf</td><td>$promedio</td></tr>";
    }

    // Calcula los porcentajes
    $porcAprobados = ($aprobados / 25) * 100;
    $porcDesaprobados = ($desaprobados / 25) * 100;

    // Filas adicionales para mostrar el total de aprobados y desaprobados con porcentaje
    echo "<tr><td colspan='2'>Nro de Aprobados</td><td colspan='2'>$aprobados ($porcAprobados%)</td></tr>";
    echo "<tr><td colspan='2'>Nro de Desaprobados</td><td colspan='2'>$desaprobados ($porcDesaprobados%)</td></tr>";
    echo "</table>";
    ?>
</body>
</html>