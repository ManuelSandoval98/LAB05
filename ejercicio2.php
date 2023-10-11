<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrica de Gaseosas</title>
</head>
<body>
    <form method="post" action="">
        Precio actual de Gaseosas: <br>  <input type="text" name="precioActual"><br>
        Cantidades adquiridas: <br>  <input type="text" name="cantidades"><br>
        <input type="submit" name="Calcular" value="Calcular"><br>
        Resultado: <br>
    </form>

<?php
    $precioActual=$_POST['precioActual'];
    $precioNuevo=$precioActual-($precioActual*0.05);
    $cantidades=$_POST['cantidades'];
    $importeCompra=$cantidades*$precioNuevo;
    $descuento=$importeCompra*0.07;
    $importePagar=$importeCompra-$descuento;
    $obsequio=$cantidades*2;
    echo "<br>";
    echo "Precio Actual: S/.", $precioActual, "<br>";
    echo "Cantidades adquiridas: ", $cantidades, "<br>";
    echo "<br>";
    echo "Nuevo Precio: S/.", $precioNuevo, "<br>";
    echo "Importe de Compra: S/. ", $importeCompra, "<br>";
    echo "Descuento: S/. " , $descuento, "<br>";
    echo "Importe a pagar: S/. " , $importePagar, "<br>";
    echo "Obsequio:  ", $obsequio, " caramelos";

?>
</body>
</html>