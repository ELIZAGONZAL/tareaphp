<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $costo_del_articulo_1 = floatval ($_POST['costo_del_articulo_1']);
    $costo_del_articulo_2 = floatval ($_POST['costo_del_articulo_2']);
    $costo_del_articulo_3 = floatval ($_POST['costo_del_articulo_3']);
    $total_de_la_compra=$costo_del_articulo_1+$costo_del_articulo_2+$costo_del_articulo_3;
        $descuento=$total_de_la_compra*0.15;
    $pago_final=$total_de_la_compra-$descuento;
    echo 'Valor de descuento: ' . $descuento . "<br/>\n";
    echo 'Valor de pago final: ' . $pago_final . "<br/>\n";
    echo 'Valor de total de la compra: ' . $total_de_la_compra . "<br/>\n";
}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Descuento del 15% en una tienda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="costo_del_articulo_1">Ingresa el valor de costo del articulo 1:</label>
                        </td>
                        <td>
                            <input name="costo_del_articulo_1" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="costo_del_articulo_2">Ingresa el valor de costo del articulo 2:</label>
                        </td>
                        <td>
                            <input name="costo_del_articulo_2" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="costo_del_articulo_3">Ingresa el valor de costo del articulo 3:</label>
                        </td>
                        <td>
                            <input name="costo_del_articulo_3" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>