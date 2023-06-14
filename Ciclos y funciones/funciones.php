<?php 

function saludo($nombre){ //esta función tiene 1 parámetro
	return 'Saludo, ' . $nombre;
}

//llamamos a la función con diferentes parámetros
echo saludo('Cesar') . '<br />';
echo saludo('Alejandro') . '<br />';
echo saludo('Manuel') . '<br />';

//Hay más de 1000 funciones en PHP

function sumar($numero1, $numero2){ //esta función tiene 2 parámetros
	$resultado = $numero1 + $numero2;
	return $resultado; //la función devuelve un valor en $resultado, cada función solo devuelve un valor
}

//para llamar a una función

$resultado = sumar(10, 15);

echo $resultado;

?>