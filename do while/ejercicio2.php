<?php
	/*Determinar la media de ventas de X empleados. Cada empleado hace N ventas, el proceso se debe repetir si el
usuario lo requiere.*/
	$ventas = array(
		array('nombre' => 'Diego', 'ventas' => 150),
		array('nombre' => 'Jose', 'ventas' => 200),
		array('nombre' => 'Saúl', 'ventas' => 300),
		// ...
	);

	
	$suma_ventas = 0;

	
	foreach ($ventas as $v) {
		$suma_ventas += $v['ventas'];
	}

	
	$media_ventas = $suma_ventas / count($ventas);

	// Mostrar el resultado
	echo "La media de ventas de los empleados es: $" . $media_ventas;

	// Preguntar al usuario si quiere repetir el proceso
	echo "\n¿Desea repetir el proceso? (s/n) ";
	$respuesta = trim(fgets(STDIN));

	// Si el usuario responde "s", volver a ejecutar el código
	if ($respuesta == 's') {
		goto start;
	}
?>