<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo count($meses); //entrar en php.net para consultas

$ultimo_mes = count($meses) - 1; //vale 11
$penultimo_mes = count($meses) - 2; //vale 10
//Accedemos al último mes, recuerda que los arrays empiezan en el 0

?>
<!-- Parte II -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceder a una posición de un array</title>
</head>
<body>
	<h3><?php echo $meses[$ultimo_mes];  ?></h3>
		<h3><?php echo $meses[$penultimo_mes];  ?></h3>
</body>
</html>


