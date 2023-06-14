<?php 

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$array = array('Carlos', 'Cesar', 'Alejandro');
$array_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = true;

//var_dump es una función que devuelve el tipo y la información contenida
// echo "<pre>"; //etiqueta pre de html: se muestra la info como está escrita en el archivo
var_dump($texto);
var_dump($numero);
var_dump($numero2);
var_dump($boleano);
var_dump($array_asociativo);
// echo "</pre>";

//la funcion print_r muestra solo el valor, no el tipo 

print_r($texto);
print_r($array_asociativo);
?>