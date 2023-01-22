<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $grados_Fahrenheit = floatval ($_POST['grados_Fahrenheit']);
    $grados_Celsius=($grados_Fahrenheit-32)/1.8;
    $grados_Kelvin=$grados_Celsius+273.15;
    echo 'Valor de grados Celsius: ' . $grados_Celsius . "<br/>\n";
   
}
 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Grados Fahrenheit a Celsius y Kelvin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="grados_Fahrenheit">Ingresa el valor de grados Fahrenheit:</label>
                        </td>
                        <td>
                            <input name="grados_Fahrenheit" required="required" step="0.000001" type="number" />
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