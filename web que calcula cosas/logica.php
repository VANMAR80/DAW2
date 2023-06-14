<?php
$puerta=$_POST['Puertas'];
$bit1=$_POST['Bit_1'];
$bit2=$_POST['Bit_2'];

if($puerta=='AND'){

$resultado= $bit1 and $bit2;

}
else if ($puerta=='OR'){

$resultado= $bit1 or $bit2;

}

else{

$resultado= $bit1 xor $bit2;

}

echo 'La salida de la puerta es: ' .$resultado;

require 'puertas_logicas.php';
?>