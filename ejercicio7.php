<?php

$sueldo = 500.00;

$venta1 = 25.00;
$venta2 = 25.00;
$venta3 = 50.00;


$comision = ($venta1+$venta2+$venta3)*0.1;

echo "Sueldo: ".$sueldo."<br>";
echo "Venta1: ".$venta1."<br>";
echo "Venta2: ".$venta2."<br>";
echo "Venta3: ".$venta3."<br>";
echo "Comision: ".$comision."<br>";
echo "Total a Pagar al Vendedor: ".($sueldo+$comision)."<br>"

?>