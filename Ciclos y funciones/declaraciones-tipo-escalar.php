<?php
declare(strict_types=1); //con esta línea le decimos a php que sea estricto, si le pasamos un parámetro texto que no busque un número.
function cuadrado(int $numero){ //como en otros lenguajes de programación, en php podemos decirle el tipo de la variable que pasamos como argumento, así nos aseguramos que cuando se llama a una función el usuario va a llamarla bien. Si el usuario en vez de un número envía un texto, da un error, salvo que la cadena de texto sea un número.
	return $numero * $numero;
}

//$numero= 'Vane';
$numero= 8;
//$numero = '8';
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);

//si ejecutáis esta web cambiando la variable $numero podéis ver las diferencias.