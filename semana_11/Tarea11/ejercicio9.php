<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 9</title>
</head>

<body>
    <h1>Ejercicio 9</h1>
    <form method="post" action="">
        <table>
            <tr>
                <td><label for="nombre">Nombre del comprador:</label></td>
                <td><input type="text" id="nombre" name="nombre" required></td>
            </tr>
            <tr>
                <td><label for="sueldo">Sueldo:</label></td>
                <td><input type="number" id="sueldo" name="sueldo" required></td>
            </tr>
            <tr>
                <td><label for="departamento">Tipo de departamento:</label></td>
                <td>
                    <select id="departamento" name="departamento" required>
                        <option value="85">85 mt2</option>
                        <option value="100">100 mt2</option>
                        <option value="120">120 mt2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="fecha">Fecha de compra:</label></td>
                <td><input type="date" id="fecha" name="fecha" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $sueldo = $_POST["sueldo"];
        $departamento = $_POST["departamento"];
        $fecha = $_POST["fecha"];

        // Validar datos
        if ($sueldo < 500) {
            echo "<p>El trabajador debe tener un ingreso mínimo de $500.</p>";
        } else {
            // Calcular cuota inicial y pago mensual
            $costo = 0;
            if ($departamento == "85") {
                $costo = 15000;
            } elseif ($departamento == "100") {
                $costo = 18000;
            } elseif ($departamento == "120") {
                $costo = 21000;
            }

            $cuota_inicial = 0;
            $pago_mensual = 0;
            if ($sueldo < 1000) {
                $cuota_inicial = $costo * 0.02;
                $pago_mensual = ($costo - $cuota_inicial) / (5 * 12);
            } else {
                $cuota_inicial = $costo * 0.05;
                $pago_mensual = ($costo - $cuota_inicial) / (4 * 12);
            }

            // Mostrar tabla de pagos
            echo "<h2>Calendario de Pagos</h2>";
            echo "<table>
            <tr>
                <th>Costo del departamento</th>
                <th>Cuota inicial</th>
                <th>Saldo</th>
            </tr>
            <tr>
                <td>$costo</td>
                <td>$cuota_inicial</td>
                <td>" . ($costo - $cuota_inicial) . "</td>
            </tr>
            </table>";

                    echo "<table>
            <tr>
                <th>Fecha de pago</th>
                <th>Cuota mensual</th>
                <th>Saldo</th>
            </tr>";

            $saldo = $costo - $cuota_inicial;
            $meses = 0;
            while ($saldo > 0.01) { // Se compara con 0.01 para evitar errores de redondeo
                $meses++;
                $saldoActual = $saldo - $pago_mensual;
                // Asegurar que el saldo no sea negativo
                $saldoActual = max(0, $saldoActual);
                echo "<tr>
                <td>" . date("Y-m-d", strtotime($fecha . " +" . ($meses - 1) . " month")) . "</td>
                <td>$pago_mensual</td>
                <td>$saldoActual</td>
            </tr>";
                $saldo = $saldoActual;
            }

            echo "</table>";
        }
    }
    ?>
</body>

</html>