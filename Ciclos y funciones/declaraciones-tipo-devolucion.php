<?php
declare(strict_types=1);
function obtenerEdad() : int{ //en este tipo de funciones especificamos el dato que devuelve
	$edad = 23;
	//$edad = 'Tengo 38 años'; //si pongo esto sin decir que la función debe devolver un entero, la función me devuelve lo que tiene la variable edad sin comprobar que es un entero.
	return $edad;
}

echo obtenerEdad();