<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

//sort ($numeros); //ordena de menor a mayor

rsort($numeros); // ordena de mayor a menor

// sort($meses);
rsort($meses);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php
			// foreach($numeros as $numero){
			// 	echo '<li>' . $numero . '</li>';
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
		<?php
		 	foreach($numeros as $i){
			 	echo '<li>' . $i . '</li>';
			
			}
			foreach($numeros as $i){
			 	echo '<li>' . $i . '</li>';
			
			}
		?>
	</ul>
</body>
</html>


<?php
$meses2 = array(
	'Enero', 'Febrero', 'Marzo', 'abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'noviembre', 'Diciembre'
);
	natcasesort($meses2);
	foreach($meses2 as $i){
			 	echo '<li>' . $i . '</li>';
			
	}
?>