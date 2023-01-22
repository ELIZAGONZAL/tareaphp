<?php
	/*Un vendedor ha hecho una serie de ventas y desea saber cuántas de éstas fueron de $200 o menos; cuántas
fueron mayores a 200 pero inferiores a 400 y cuántas de 400 o más. Elabore la información para ese
vendedor después de leer los datos de entrada. Considere –1 como fin de datos.*/

	$ventas_200_o_menos = 0;
	$ventas_200_400 = 0;
	$ventas_400_o_mas = 0;

	// Leer el importe de la primera venta
	echo "Ingrese el importe de la venta (o -1 para terminar): ";
	$importe = (int) trim(fgets(STDIN));

	// Mientras el importe sea diferente de -1, seguir leyendo ventas
	while ($importe != -1) {
		// Contar la venta según su importe
		if ($importe <= 200) {
			$ventas_200_o_menos++;
		} elseif ($importe > 200 && $importe < 400) {
			$ventas_200_400++;
		} else {
			$ventas_400_o_mas++;
		}

		// Leer el importe de la siguiente venta
		echo "Ingrese el importe de la venta (o -1 para terminar): ";
		$importe = (int) trim(fgets(STDIN));
	}

	// Mostrar el resultado
	echo "Cantidad de ventas de $200 o menos: " . $ventas_200_o_menos . "\n";
	echo "Cantidad de ventas mayores a $200 per



    ?>