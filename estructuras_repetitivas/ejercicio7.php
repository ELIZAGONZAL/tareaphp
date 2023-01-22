<?php

// Inicializar variables
$numeros = array(1, -2, 3, -4, 5, -6, 7, -8, 9, -10);
$num_positivos = 0;
$suma_positivos = 0;
$suma_todos = 0;

foreach ($numeros as $numero) {
  
  if ($numero > 0) {
    $num_positivos++;
  }

  if ($numero > 0) {
    $suma_positivos += $numero;
  }

  $suma_todos += $numero;
}

$promedio_positivos = $suma_positivos / $num_positivos;

$suma_todos = $suma_todos / count($numero);

// Salida de los resultados
echo "Número de números positivos: $num_positivos\n";
echo "Promedio de números positivos: $promedio_positivos\n";
echo "Promedio de todos los números: $suma_todos\n";

