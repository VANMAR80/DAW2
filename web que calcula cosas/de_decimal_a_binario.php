<?php

$numero=$_POST['decimal'];
echo 'El número en decimal es '. $numero . '. ' . '<br/>';

$binario=decbin($numero);
echo 'En número binario es ' . $binario;
?>