<?php
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];
    
    $totalsinD=$cantidad*$precio;

    if($cantidad>=3 && $cantidad<=7){
        $descuento= $totalsinD*0.157;
    }
    elseif($cantidad>=8 && $cantidad<=15){
        $descuento= $totalsinD*0.265;
    }
    elseif($cantidad>15){
        $descuento= $totalsinD*0.295;
    }
    else {
        $descuento=0;
    }
    $total=$totalsinD-$descuento;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Resultados</title>
</head>
<body> <?php?>

        <div id="container">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">DETALLE DE COMPRA</th>
                    </tr>
                </thead>
                    <tr>
                        <td>Cantidad de celulares comprados</td>
                        <td><?php echo $cantidad;?></td>
                    </tr>
                    <tr>
                        <td>Precio unitario</td>
                        <td>$ <?php echo $precio;?></td>
                    </tr>
                    <tr>
                        <td>Total sin descuento </td>
                        <td>-$ <?php echo $totalsinD;?></td>
                    </tr>
                    <tr>
                        <td>Descuento: </td>
                        <td>$ <?php echo $descuento;?></td>
                    </tr>
                    <tr>
                        <td class="total">Total a pagar</td>
                        <td class="total">$ <?php echo $total;?></td>
                    </tr>
                
            </table>
        </div>

  
   
</body>
</html>