<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <center>
        <h2>Notas del taller</h2>
        <table class="mGrid">
            <tr><th>Nro.</th><th>Exp</th><th>Exf</th><th>Promedio</th><th>Figura</th></tr>
            <?php
            $cap=0; $cds=0;
            for ($n=1; $n <= 25; $n++) { 
                $exp = rand(0,20);
                $exf = rand(0,20);
                $pro = ($exp+$exf) / 2;
                if($pro>=11.5){
                    $pic="feliz.jpg";
                    $cap++;
                }else{
                    $cds++;
                    $pic= "triste.jpg";
                }
                echo "<tr><td>$n<td>$exp<td>$exf<td>$pro";
                ?>
            <td><img src="imagen/<?=$pic?>" height="30" width="30">
            <?php
            }
            ?>
            <tr><td colspan="3">Nro. de Aprobados <td><?=$cap?></td></td></tr>
            <tr><td colspan="3">Nro. de Desaprobados <td><?=$cds?></td></td></tr>
        </table>
    </center>
</body>
</html>