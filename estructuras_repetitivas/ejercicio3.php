<?php 
/*Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos.*/

// Inicializar variables para contar los números positivos, negativos y nulos
$positives = 0;
$negatives = 0;
$zeros = 0;

// Leer 100 números enteros
for ($i = 1; $i <= 100; $i++) {
  // Solicitar el número al usuario
  $number = readline("Ingrese el número $i: ");
  // Convertir el número a entero
  $number = intval($number);

  // Verificar si el número es positivo, negativo o nulo
  if ($number > 0) {
    $positives++;
  } elseif ($number < 0) {
    $negatives++;
  } else {
    $zeros++;
  }
}

// Imprimir el resultado
echo "Positivos: " . $positives . "\n";
echo "Negativos: " . $negatives . "\n";
echo "Nulos: " . $zeros . "\n";
?>















?>