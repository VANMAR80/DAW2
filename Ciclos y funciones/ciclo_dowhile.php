<?php 

// con do while el ciclo siempre se ejecuta al menos una vez
$i = 1;

do {
	echo $i . '<br />';
	$i++;
} while($i <= 20);

//while ($i == 20); //si no se cumple la condición, al menos el ciclo se ejecuta una vez
?>