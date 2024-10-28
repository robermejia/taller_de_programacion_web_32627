<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Distancia recorrida por un automóvil</title>
</head>

<body>
    <?php
    // Ejercicio 9: Plan de vivienda
    echo "<h1>Ejercicio 9: Plan de vivienda</h1>";

    // Obtener los datos del usuario
    echo "<form method='post'>";
    echo "<label for='nombreComprador'>Nombre del comprador:</label>";
    echo "<input type='text' id='nombreComprador' name='nombreComprador' required><br>";
    echo "<label for='sueldo'>Sueldo:</label>";
    echo "<input type='number' id='sueldo' name='sueldo' required><br>";
    echo "<label for='tipoDepartamento'>Tipo de departamento:</label>";
    echo "<select id='tipoDepartamento' name='tipoDepartamento'>";
    echo "<option value='85'>85 m2</option>";
    echo "<option value='100'>100 m2</option>";
    echo "<option value='120'>120 m2</option>";
    echo "</select><br>";
    echo "<label for='fechaCompra'>Fecha de compra:</label>";
    echo "<input type='date' id='fechaCompra' name='fechaCompra' required><br>";
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";

    // Función para obtener el costo del departamento
    function getCosto($area) {
        switch ($area) {
            case 85:
                return 15000;
            case 100:
                return 18000;
            case 120:
                return 21000;
        }
    }

    // Procesar los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreComprador = $_POST["nombreComprador"];
        $sueldo = $_POST["sueldo"];
        $tipoDepartamento = $_POST["tipoDepartamento"];
        $fechaCompra = $_POST["fechaCompra"];

        // Validar los datos
        if ($sueldo < 500) {
            echo "<p>Error: El trabajador debe tener un ingreso mínimo de $500.</p>";
        } else {
            // Calcular la cuota inicial y el pago mensual
            $cuotaInicial = 0;
            $pagoMensual = 0;
            $plazo = 0;
            if ($sueldo < 1000) {
                $cuotaInicial = 0.02 * getCosto(intval($tipoDepartamento)); // Corrección: Convertir a número
                $plazo = 5; // 5 años
            } else {
                $cuotaInicial = 0.05 * getCosto(intval($tipoDepartamento)); // Corrección: Convertir a número
                $plazo = 4; // 4 años
            }
            $pagoMensual = ($getCosto(intval($tipoDepartamento)) - $cuotaInicial) / ($plazo * 12); // Corrección: Convertir a número

            // Mostrar los resultados
            echo "<p>Nombre del comprador: $nombreComprador</p>";
            echo "<p>Sueldo: $$sueldo</p>";
            echo "<p>Tipo de departamento: $tipoDepartamento m2</p>";
            echo "<p>Fecha de compra: $fechaCompra</p>";
            echo "<p>Cuota inicial: $$cuotaInicial</p>";
            echo "<p>Pago mensual: $$pagoMensual</p>";

            // Mostrar la tabla de áreas y costos
            echo "<table border='1'>";
            echo "<tr><th>Área (m2)</th><th>Costo ($)</th></tr>";
            echo "<tr><td>85</td><td>15000</td></tr>";
            echo "<tr><td>100</td><td>18000</td></tr>";
            echo "<tr><td>120</td><td>21000</td></tr>";
            echo "</table>";
        }
    }
    ?>
</body>

</html>