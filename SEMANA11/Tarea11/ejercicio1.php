<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Ejercicio 1: Tabla de ángulos
    echo "<h1>Ejercicio 1: Tabla de ángulos</h1>";
    echo "<table border='1'><tr><th>Ángulo</th><th>Seno (ang)</th><th>Raíz (ángulo)</th></tr>";
    for ($i = 1; $i <= 20; $i++) {
        $angulo = rand(30, 90);
        $seno = sin(deg2rad($angulo)); // Calcula el seno en radianes
        $raiz = sqrt($angulo); // Calcula la raíz cuadrada del ángulo
        echo "<tr><td>$angulo</td><td>" . number_format($seno, 4) . "</td><td>" . number_format($raiz, 4) . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>