<?php
/*Escribir un programa que pregunte al usuario su nombre, apellido, DUI, edad, teléfono y dirección, y que lo
muestre en pantalla.*/

$nombre ="MARGARITA ELISABETH ";
$apellido = "GONZALEZ VALLADARES";
$dui = "";
$edad = 23 ;
$telefono = "";
$direccion = "";



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Datos de la Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre Completo</th>
            <th>DUI</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>
        
    </thead>
    <tbody>
        <tr>
        <td><?php echo $nombre. "" . $apellido ?></td>
        <td><?php echo $dui ?></td>
        <td><?php echo $edad ?></td>
        <td><?php echo $telefono ?></td>
        <td><?php echo $direccion ?></td>
            
        </tr>
    </tbody>
    </table>
    



    
</body>
</html>