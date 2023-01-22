<?php
//OPERADORES ARITMETICOS
//SUMA +
//RESTA -
//MULTIPLICACION *
//DIVISION /
//MODULO %

define =("PI". "3.1416")
$num1 = 15.33;
$num2 =10;


echo "La Suma es: " .$num1+$num2. "<br>";
echo "La Resta es: " .$num1-$num2. "<br>";
echo "La Multiplicacion es: " .$num1*$num2. "<br>";
echo "La Division es: " .$num1/$num2. "<br>";



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<table  class="table table-success table-striped">
    <thead>
        <tr>
            <th>Suma</th>
            <th>Resta</th>
            <th>Multiplicacion</th>
            <th>Division</th>
           
        </tr>
        
    </thead>
    <tbody>
        <tr>
        <td><?php echo $num1+$num2 ?></td>
        <td><?php echo $num1-$num2 ?></td>
        <td><?php echo $num1*$num2?></td>
        <td><?php echo $num1/$num2  ?></td>
      
            
        </tr>
    </tbody>
    </table>
    



    
</body>
</html>