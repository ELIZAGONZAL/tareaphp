<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $a = floatval ($_POST['a']);
    $b = floatval ($_POST['b']);
    $c = floatval ($_POST['c']);
    $medio=0;
    if($a>=$b&&$b>=$c)
        $medio=$b;
    if($b>=$c&&$c>=$a)
        $medio=$c;
    if($c>=$a&&$a>=$b)
        $medio=$a;
    echo 'Valor de medio: ' . $medio . "<br/>\n";
}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Medio de 3 números</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                <tr>
                        <td>
                            <label for="a">Ingresa el valor de a:</label>
                        </td>
                        <td>
                            <input name="a" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="b">Ingresa el valor de b:</label>
                        </td>
                        <td>
                            <input name="b" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="c">Ingresa el valor de c:</label>
                        </td>
                        <td>
                            <input name="c" required="required" step="0.000001" type="number" />
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