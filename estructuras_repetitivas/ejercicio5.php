<?php  
/*Dados 24 números reales que representan las temperaturas del exterior en un período de 24 horas. Encuentre la
temperatura media del día y las temperaturas más alta y más baja del día.*/

$temperaturas = array(24, 22, 21, 20, 19, 18, 17, 16, 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1 , 0);

$suma = 0;
$mayor = $temperaturas[0];
$menor = $temperaturas[0];

foreach ($temperaturas as $temperatura) {
  $suma += $temperatura;
  if ($temperatura > $mayor) {
    $mayor = $temperatura;
  }
  if ($temperatura < $menor) {
    $menor = $temperatura;
  }
}

$promedio = $suma / count ($temperaturas);

echo "Temperatura promedio: $promedio <br>";
echo "Temperatura más alta: $mayor <br>";
echo "Temperatura más baja: $menor";








?>