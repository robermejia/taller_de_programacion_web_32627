<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Pagos de Préstamo</title>
</head>
<body>
<!-- Formulario para ingresar el monto del préstamo y los meses -->
<form method="post">
    <label for="prestamo">Monto del Préstamo:</label>
    <input type="number" name="prestamo" id="prestamo" required>
    <br><br>
    
    <label for="meses">Cantidad de Meses:</label>
    <input type="number" name="meses" id="meses" required>
    <br><br>
    
    <input type="submit" value="Generar Tabla de Pagos">
</form>
<?php
    // Ejercicio 4: Préstamo
    echo "<h1>Ejercicio 4: Préstamo</h1>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados por el usuario
    $prestamo = $_POST["prestamo"];
    $meses = $_POST["meses"];
    
    // Calcular la cuota y el saldo inicial
    $cuota = $prestamo * 0.01;
    $saldo = $prestamo;

    // Generar la tabla de pagos
    echo "<h2>Tabla de Pagos</h2>";
    echo "<table border='1'>
    <tr><th>Mes</th><th>Cuota</th><th>Saldo</th></tr>";
    
    for ($mes = 1; $mes <= $meses; $mes++) {
        $saldo -= $cuota;
        echo "<tr><td>$mes</td><td>" . number_format($cuota, 2) . "</td><td>" . number_format($saldo, 2) . "</td></tr>";
    }
    
    echo "</table>";
}
?>

</body>
</html>
