<?php
/*Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
a. Si el sueldo es menor a $1000: aumento 12%
b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
c. Si el sueldo es mayor a $25000: aumento 8%
d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento.*/     

$cantEmpleado = readline('CUANTOS EMPLEADOS?');
$aumento = 0;
for ($i = 0; $i < $cantEmpleado; $i++){
    $aumento = 0;
    echo "_______________________________________________\n";
    echo 'INFORMACION DEL EMPLEADO # '. ($i + 1). "\n";
    $sueldo = readline('SUELDO');
    if ($sueldo <1000){
        $aumento = $sueldo * 0.12;

    }elseif ($suldo >= 1000 && $sueldo <= 25000){
        $aumento = $sueldo *0.1;
    } else{
        $aumento = $sueldo *0.08;
    }

    echo 'SUELDO SI AUMENTO:'. $sueldo . "\n";
    echo 'AUMENTO:'. $aumento . "\n";
    echo 'SUELDO A PAGAR CON AUMENTO:' . ($sueldo + $aumento) . "\n";

}


?>