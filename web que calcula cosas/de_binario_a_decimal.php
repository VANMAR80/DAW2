<?php

$numero=$_POST['binario'];
echo 'El número en binario es '. $numero . '. '. '<br/>';

$binario=bindec($numero);
echo ' En número decimal es ' . $binario;
?>