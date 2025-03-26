<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Distancia recorrida por un automóvil</title>
</head>

<body>
    <?php
    // Ejercicio 8: Compra de computadora a crédito
    echo "<h1>Ejercicio 8: Compra de computadora a crédito</h1>";

    // Obtener el precio de la computadora y el tipo de pago del usuario
    echo "<form method='post'>";
    echo "<label for='precioComputadora'>Precio de la computadora:</label>";
    echo "<input type='number' id='precioComputadora' name='precioComputadora' required><br>";
    echo "<label for='tipoPago'>Tipo de pago (meses):</label>";
    echo "<select id='tipoPago' name='tipoPago'>";
    echo "<option value='6'>6 meses</option>";
    echo "<option value='8'>8 meses</option>";
    echo "<option value='12'>12 meses</option>";
    echo "</select><br>";
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";

    // Procesar los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precioComputadora = $_POST["precioComputadora"];
        $meses = $_POST["tipoPago"];

        // Calcular el interés según la cantidad de meses
        $interes = 0;
        switch ($meses) {
            case 6:
                $interes = 0.2;
                break;
            case 8:
                $interes = 0.25;
                break;
            case 12:
                $interes = 0.3;
                break;
        }

        // Mostrar el interés
        echo "<p>Interés para $meses meses: " . ($interes * 100) . "%</p>";

        // Calcular el precio final
        $precioFinal = $precioComputadora * (1 + $interes);

        // Mostrar el precio final
        echo "<p>Precio Final: $precioFinal</p>";

        // Mostrar el calendario de pagos
        echo "<table border='1'>";
        echo "<tr><th>Mes</th><th>Cuota Mensual</th><th>Saldo</th></tr>";
        $saldo = $precioFinal;
        $cuotaMensual = $precioFinal / $meses;
        for ($i = 1; $i <= $meses; $i++) {
            $saldo -= $cuotaMensual;
            echo "<tr><td>$i</td><td>$cuotaMensual</td><td>$saldo</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>