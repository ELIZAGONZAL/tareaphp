<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $lado_1 = floatval ($_POST['lado_1']);
    $lado_2 = floatval ($_POST['lado_2']);
    $lado_3 = floatval ($_POST['lado_3']);
    $hipotenusa=0;
    if($lado_1*$lado_1==$lado_2*$lado_2+$lado_3*$lado_3)
        $hipotenusa=1;
    if($lado_2*$lado_2==$lado_3*$lado_3+$lado_1*$lado_1)
        $hipotenusa=2;
    if($lado_3*$lado_3==$lado_1*$lado_1+$lado_2*$lado_2)
        $hipotenusa=3;
    echo 'Valor de hipotenusa: ' . $hipotenusa . "<br/>\n";
}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Hipotenusa de un triángulo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="lado_1">Ingresa el valor de lado 1:</label>
                        </td>
                        <td>
                            <input name="lado_1" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lado_2">Ingresa el valor de lado 2:</label>
                        </td>
                        <td>
                            <input name="lado_2" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lado_3">Ingresa el valor de lado 3:</label>
                        </td>
                        <td>
                            <input name="lado_3" required="required" step="0.000001" type="number" />
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