<?php
echo "<h1>Practica 1.Arrays y Strings</h1>";
/*
Ejercicio 1 : La fecha actual  https://www.php.net/manual/es/function.date.php
 */
echo "Ejercicio 1 <br>";
echo "La fecha de hoy es ".date("d-m-y");
/*
Ejercicio 2 
El resultado de calcular el área de un círculo de radio 4 cm. El valor del radio debe
guardarse en una variable y el valor de pi en una constante.
*/
echo "<br><br>Ejercicio 2 <br>";

define('pi',3.14);
$radio = 4;

echo "El area de un círculo de radio ". $radio. " es ".pi*pow($radio,2);
/*
Ejercicio 3
Crea un array con los días de la semana y muestra por pantalla el último elemento.
*/
echo "<br><br>Ejercicio 3 <br>";

$semana = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
echo $semana[6]; //puedes usar la función pop de arrays o contar los elementos del array y sacar el último elemento del array (count -1).
/*
Ejercicio 4
Crea un array de 5 elementos de números enteros y muestra por pantalla la suma de sus
elementos.
*/
echo "<br><br>Ejercicio 4 <br>";

$numeros = array(1,2,3,4,5);

echo "La suma del array es: ".array_sum($numeros);
/*
Ejercicio 5
El resultado de ordenar de mayor a menor y de menor a mayor un array de 10 números
enteros que tú elijas.
*/
echo "<br><br>Ejercicio 5 <br>";

$numeros2 = array(1,3,2,4,6,5,8,7,9,0);

rsort($numeros2);
echo "Array ordenador de mayor a menor ";

for($i = 0 ;$i < 10 ; $i++){
	echo $numeros2[$i]." ";
}

sort($numeros2);
echo "<br>Array ordenado de menor a mayor ";

for($i = 0 ;$i < 10 ; $i++){
	echo $numeros2[$i]." ";
}
/*
Ejercicio 6
Crea un array asociativo con 3 claves diferentes y llama a una función para que se muestren
por pantalla.
*/
echo "<br><br>Ejercicio 6 <br>";

$array_asociativo = array("Nombre" => "Vanessa","Apellido" => "Martín","Edad" => 41);

print_r($array_asociativo);
var_dump($array_asociativo);

/*
Ejercicio 7
Crea dos arrays de al menos 4 elementos y que tengan 2 elementos en común.
a. Programa un script que muestre por pantalla los elementos que tienen en común.
b. Programa un script que muestre por pantalla los elementos que no tienen en común.
*/
echo "<br><br>Ejercicio 7 <br>";

$array1 = array(1,2,3,4);
$array2 = array(1,5,6,4);
/*
Arrays asociativos y usando funciones predefinidas, comparando claves:
$array1 = array('uno' => 1,'dos' => 2,'tres' => 3,'cuatro' => 4);
$array2 = array('uno' => 1,'cinco' => 5,'seis' => 6,'cuatro' => 4);
*/
$tam_array = count($array1); //tamaño del array
//Se muestra arrays a comparar
echo "Los elementos comunes de: <br>";
for($i = 0 ;$i < $tam_array ; $i++){
	echo $array1[$i]." ";
}
echo "<br>y<br>";
for($i = 0 ;$i < $tam_array ; $i++){
	echo $array2[$i]." ";
}

//a.Se buscan y muestran iguales
echo "<br>son:";
for($i = 0;$i < $tam_array;$i ++)
	if($array1[$i] == $array2[$i])
		echo $array1[$i]. " ";
/*
Arrays asociativos y usando funciones predefinidas:
var_dump(array_intersect_key($array1, $array2));
*/

//b.Se buscan y muestran distintos
echo "<br>Los elementos distintos son:";
for($i = 0;$i < $tam_array;$i ++)
	if($array1[$i] != $array2[$i])
		echo $array1[$i]. " " . $array2[$i] . " ";
/*
Arrays asociativos y usando funciones predefinidas:
var_dump(array_diff_key($array1, $array2),array_diff_key($array2, $array1));
*/

/*
Ejercicio 8
Busca en internet el comportamiento de una pila.
a. Crea un script en PHP en el que haya un array de 2 elementos y le añadas 3
elementos más en otra línea de código.
b. Muestra por pantalla el último elemento de la pila.
*/

echo "<br><br>Ejercicio 8 <br>";
//a
$pila = array(1,2);
array_push($pila,3,4,5);
//b
echo "Último elemento del array nuevo: " . $pila[count($pila)-1];

/*
Ejercicio 9
Crea un array con 7 nombres diferentes incluido el tuyo y utiliza una función para
encontrarlo y mostrarlo por pantalla.Utilizando las funciones definidas para cadenas de texto:
 https://www.php.net/manual/en/ref.strings.php
 */

echo "<br><br>Ejercicio 9 <br>";

$nombres = array("Jose","Pepe","Luis","Juan","Jorge","Paco","Raul");
$mi_nombre = "Paco";
$tam_nombres = count($nombres);
/*Busqueda del nombre comparando con cada elemento del array*/
for($i = 0; $i < $tam_nombres; $i++)
	if(strcmp($mi_nombre,$nombres[$i]) == 0)
		echo $mi_nombre. " esta en la posicion ".$i;

/*
Ejercicio 10
Crea dos variables con cadenas de texto, muéstralas por pantalla y únelas en una sola
cadena de texto que también muestres por pantalla.
*/

echo "<br><br>Ejercicio 10 <br>";

$cadena1 = "Hola, soy ";
$cadena2 = "Pepe, encantado de conocerte.";

echo $cadena1 ."<br>";
echo $cadena2 ."<br>";
echo $cadena1 . $cadena2;

/*
Ejercicio 11
Crea una variable con una cadena de texto con espacios adicionales y muestra por pantalla
esa misma cadena eliminando los espacios no necesarios.
*/

echo "<br><br>Ejercicio 11 <br>";

$cadena3 = "     Hola,      que tal estas?     ";
/*Version con funciones existentes*/
echo "<pre>".$cadena3."</pre>";
echo "<pre>".trim($cadena3)."</pre>";

/*Versión quitando todos los espacios*/
$cadena3 = "     Hola,      que tal estas?     ";
$cad="";
//Valores para el primer caracter por la izq y der != de " "
$ini = 0;
$fin = strlen($cadena3)-1;
//Bucle que "elimina" los primeros espacios
while($cadena3[$ini] == " "){
	$ini++;
}
//Bucle que "elimina" los ultimos espacios
while($cadena3[$fin] == " "){
	$fin--;
}

echo "<pre>".$cadena3."</pre>";

for($i=$ini; $i < ($fin+1); $i++){
	if(($i < strlen($cadena3)-1) && $cadena3[$i] == " " && $cadena3[$i+1] == " ")
		$i++;
	else
		//Inicializo otra variable para luego poder usar pre de tal manera que me muestre la cadena en formato deseado.
		$cad.=$cadena3[$i];
}

echo "<pre>".$cad."</pre>";

/*
Ejercicio 12
Crea una variable con la cadena de texto: “Había una vez un programador con un
ordenador nuevo y una nueva pantalla de 27”...” y haz un script en el que
busques el número de veces que aparece la cadena de texto “una” y “un” y en qué posición
se encuentran dentro de la cadena original.
*/

echo "<br>Ejercicio 12 <br>";

$cadena4 = "Había una vez un programador con un ordenador nuevo y una nueva pantalla de 27”...";
/*Para sacar las veces que aparece habría que picarlo a mano*/
echo $cadena4;
$pos = 0;

/*
Bucle que coge una subcadena desde la ultma coincidencia encontrada y vuelve a buscar hasta obtener todas las posiciones
de la palabra buscada
*/
echo "<br>Veces que aparece la palabra una :".substr_count($cadena4, " una ")." y aparece en:" ;
for($i = 0 ;$i < substr_count($cadena4, " una ");$i++)
	echo ($pos += strpos(substr($cadena4,$pos), " una ")+1)." ";

$pos = 0;
echo "<br>Veces que aparece la palabra un :".substr_count($cadena4, " un ")." y aparece en:" ;
for($i = 0 ;$i < substr_count($cadena4, " un ");$i++)
	echo ($pos += strpos(substr($cadena4,$pos), " un ")+1)." ";

/*
Ejercicio 13
Crea una variable con la cadena de texto: “Hola, soy (pon aquí tu nombre) y
soy alumno de DAW 2”. Muestra por pantalla sólo tu nombre obteniéndolo a partir de la
cadena de texto.
*/

echo "<br><br>Ejercicio 13 <br>";

$cadena5 = "Hola, soy (Vanessa) y soy alumno de DAW 2";
$posIni = strpos($cadena5, "(");
$posFin = strpos($cadena5, ")");

for($i = $posIni+1 ; $i < $posFin; $i++)
	echo $cadena5[$i];

/*
Ejercicio 14
Inventa un script en el que uses 2 funciones de cadenas de texto y 2 funciones de arrays.
*/

echo "<br><br>Ejercicio 14 <br>";

$array3 = array("Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete");
$arrayP = array();
$arrayG = array();

$tam_array3 = count($array3);

for($i = 0 ; $i < $tam_array3; $i++){
		array_push($arrayP, strtolower($array3[$i]));
		array_push($arrayG, strtoupper($array3[$i]));

}
print_r($arrayG);
echo "<br>";
print_r($arrayP);
echo "<br>";
print_r($array3);
?>
