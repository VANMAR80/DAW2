<?php 

# Los arrays asociativos nos permiten acceder a sus valore de una forma mas explicita.

$vane = array('telefono' => '9654654', 'edad' => 38, 'apellido' => 'Martín', 'pais' => 'España');

# Al igual que en los arrays indexados, en los asosiativos tambien podemos modificar sus valores simplemente accediendo a ellos.
$vane['telefono'] = '111111';

echo 'El telefono de Vane es: ' . $vane['telefono'];

?>