<?php
//Calcular el perímetro y área de un rectángulo dada su base y su altura.
$base =4;
$altura =6;
$area=$altura*$base;
$perimetro=$altura+$base+$altura+$base;


echo "Valor de area:". $altura*$base . "<br/>";
echo "Valor de perimetro:" .$altura+$base+$altura+$base. "<br/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area y perimetro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<table  class="table table-success table-striped">
    <thead>
        <tr>
            <th>base</th>
            <th>altura</th>
            
        </tr>
        
    </thead>
    <tbody>
        <tr>
        <td><?php echo $altura*$base ?></td>
        <td><?php echo $altura+$base+$altura+$base ?></td>
       
            
        </tr>
    </tbody>
    </table>
    
</body>
</html>