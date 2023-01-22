<?php
		// Asumimos que tenemos un arreglo con los datos de las 50 personas
		$personas = [
			['peso' => 75, 'altura' => 1.75, 'sexo' => 'M'],
			['peso' => 65, 'altura' => 1.65, 'sexo' => 'F'],
			// ... otros 48 elementos del arreglo
		];

		$peso_total = 0;
		$altura_total = 0;
		$num_personas = count($personas);
		foreach ($personas as $persona) {
			$peso_total += $persona['peso'];
			$altura_total += $persona['altura'];
		}
		$promedio_peso = $peso_total / $num_personas;
		$promedio_altura = $altura_total / $num_personas;

		echo "El promedio de peso de la población es: " . $promedio_peso . " kg";
		echo "<br>";
		echo "El promedio de altura de la población es: " . $promedio_altura . " m";
	?>
    
    <!DOCTYPE html>
<html>
<head>
	<title>Promedio de Peso y Altura</title>
</head>
<body>
</body>
</html>