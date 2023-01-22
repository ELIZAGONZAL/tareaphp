<?php
/*Dados como datos 300 números enteros, obtener la suma de los números impares y el promedio de los números
pares.*/
$sum = 0;
$count = 0;

// Leer 300 números enteros
for ($i = 1; $i <= 300; $i++) {
  // Solicitar el número al usuario
  $number = readline("Ingrese el número $i: ");
  // Convertir el número a entero
  $number = intval($number);

  // Verificar si el número es impar o par
  if ($number % 2 != 0) {
    // Si es impar, sumar al total de números impares
    $sum += $number;
  } elseif ($number % 2 == 0) {
    // Si es par, sumar al conteo de números pares
    $count++;
  }
}

$average = $sum / $count;


echo "Suma de números impares: " . $sum . "\n";
echo "Promedio de números pares: " . $average . "\n";
?>