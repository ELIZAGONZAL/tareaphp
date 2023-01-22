<!DOCTYPE html>
<html>
<head>
	<title>Promedios de Peso y Altura</title>
</head>
<body>
	<?php
		// Array con los datos de las 50 personas
		$personas = array(
			array('peso' => 70, 'altura' => 1.80, 'sexo' => 'M'),
			array('peso' => 60, 'altura' => 1.70, 'sexo' => 'F'),
			// ...
		);

		// Inicializar variables para almacenar la suma del peso y la altura
		$suma_peso = 0;
		$suma_altura = 0;
		$contador = 0;

		// Inicializar variables para almacenar la suma del peso y la altura por sexo
		$suma_peso_hombres = 0;
		$suma_altura_hombres = 0;
		$contador_hombres = 0;
		$suma_peso_mujeres = 0;
		$suma_altura_mujeres = 0;
		$contador_mujeres = 0;

		// Recorrer el array de personas y calcular la suma del peso y la altura
		foreach ($personas as $persona) {
			$suma_peso += $persona['peso'];
			$suma_altura += $persona['altura'];
			$contador++;

			// Calcular la suma del peso y la altura por sexo
			if ($persona['sexo'] == 'M') {
				$suma_peso_hombres += $persona['peso'];
				$suma_altura_hombres += $persona['altura'];
				$contador_hombres++;
			} else {
				$suma_peso_mujeres += $persona['peso'];
				$suma_altura_mujeres += $persona['altura'];
				$contador_mujeres++;
			}
		}

		// Calcular el promedio del peso y la altura
		$promedio_peso = $suma_peso / $contador;
		$promedio_altura = $suma_altura / $contador;

		// Calcular el promedio del peso y la altura por sexo
		$promedio_peso_hombres = $suma_peso_hombres / $contador_hombres;
		$promedio_altura