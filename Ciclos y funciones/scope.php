<?php

$numero = 7; //variable global: las funciones no pueden acceder a ella
//Una función no puede acceder a una variable fuera de si misma

// si quiero usarlas tengo que pasarlas como prámetro
//function mostrarNumero($numero){

function mostrarNumero(){
	global $numero;
	//$numero=10;
	return $numero;
}

//si quiero acceder a una variable que está dentro de una función debemos usar return
echo mostrarNumero();

?>