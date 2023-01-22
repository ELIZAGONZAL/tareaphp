<?php
	// Inicializar la variable para almacenar la suma
	$suma = 0;

	// Inicializar las variables para controlar el ciclo
	$a = 2;
	$b = 5;
	$c = 7;

	// Recorrer la serie hasta llegar al término 1800
	while ($c <= 1800) {
		// Sumar el término actual a la suma
		$suma += $c;

		// Calcular los siguientes términos de la serie
		$a = $b + 2;
		$b = $c + 2;
		$c = $a + $b;
	}

	// Mostrar el resultado
	echo "La suma de los términos de la serie es: $suma"

    ?>