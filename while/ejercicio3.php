<?php
	// Importe de la compra del cliente
	$importe = 100;

	// Color de la bolita del cliente
	$color = 'roja';

	// Aplicar el descuento según el color de la bolita
	switch ($color) {
		case 'roja':
			$descuento = 0.4; // 40%
			break;
		case 'amarilla':
			$descuento = 0.25; // 25%
			break;
		case 'blanca':
			$descuento = 0; // 0%
			break;
	}

	// Calcular la cantidad a pagar
	$pago = $importe - ($importe * $descuento);

	// Mostrar la cantidad a pagar
	echo "La cantidad a pagar es: $" . $pago;