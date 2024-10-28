<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Ejercicio 3: Velocidades de autos
    echo "<h1>Ejercicio 3: Velocidades de autos</h1>";
    $exceso = 0;

    echo "<table border='1'>
<tr><th>Nro</th><th>Velocidad (km/hr)</th><th>Exceso</th></tr>";

    for ($i = 1; $i <= 20; $i++) {
        $velocidad = rand(30, 90); // Genera una velocidad aleatoria entre 30 y 90 km/h
        $exceso_texto = $velocidad > 60 ? "Sí" : "No"; // Marca "Sí" si la velocidad excede 60 km/h

        // Incrementa el contador de excesos si la velocidad es mayor a 60
        if ($velocidad > 60) {
            $exceso++;
        }

        echo "<tr><td>$i</td><td>$velocidad</td><td>$exceso_texto</td></tr>";
    }

    // Fila adicional para mostrar el total de autos con exceso de velocidad
    echo "<tr><td colspan='2'>Nro de autos con exceso</td><td>$exceso</td></tr>";

    echo "</table>";
    ?>
</body>
</html>