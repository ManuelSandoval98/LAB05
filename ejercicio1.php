<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Sueldo</title>
</head>
<body>
    <form method="post" action="">
        Ingresar numero de Hijos: <br>  <input type="text" name="n_hijos"><br>
        Ingresar total ventas del mes: <br>  <input type="text" name="ventas_mes"><br>
        <input type="submit" name="Calcular" value="Calcular"><br>
        Resultado: <br>
    </form>

<?php
    $n_hijos=$_POST['n_hijos'];
    $bonificacion=$n_hijos*50;
    $ventas_mes=$_POST['ventas_mes'];
    $comision=$ventas_mes*0.75;
    $sueldoBruto=600+$bonificacion+$comision;
    $descuento=$sueldoBruto*0.11;
    $sueldoNeto=$sueldoBruto-$descuento;
    echo "<br>";
    echo "Bonificación: S/.", $bonificacion, "<br>";
    echo "Comisión: S/. ", $comision, "<br>";
    echo "Sueldo Bruto: S/. " , $sueldoBruto, "<br>";
    echo "Descuento: S/. " , $descuento, "<br>";
    echo "Sueldo Neto: S/. ", $sueldoNeto, "<br>";

?>
</body>
</html>