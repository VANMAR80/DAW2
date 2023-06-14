<?php 

# Los arrays multidimensionales nos permiten tener arrays dentro de otros arrays.

$amigos = array(
	array('Alejandro', 20),
	array('Cesar', 21),
	array('Manuel', 18)
);

# En este ejemplo accedemos primero al array amigos y luego al primer elemento dentro de amigos, despues accedemos al primer valor del array.

# Puedes llegar a tener cuantos niveles quieras.
echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';

echo $amigos[0][1] . '<br />';
echo $amigos[1][1] . '<br />';
echo $amigos[2][1] . '<br />';
//echo $amigos[2][2] . '<br />';
?>