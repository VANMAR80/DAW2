<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);


// for
$alejandro = array('telefono' => 54743221, 'edad' => 20, 'pais' => 'España');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php
			# Con el ciclo foreach podemos recorrer arrays indexados de una manera muy facil. 
			//por ejemplo con el array de los meses

			// foreach($meses as $mes){
			// 	echo '<li>' . $mes . '</li>';
			// }

			# El ciclo foreach tambien nos permite recorrer arrays asosiativos.

			foreach($alejandro as $dato => $valor){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}

		?>
	</ul>
</body>
</html>