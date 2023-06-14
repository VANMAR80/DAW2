<?php
function area($base, $altura){
$area_rectangulo= ($base*$altura);
return $area_rectangulo;
}
$area_rectangulo= area(2, 2);
echo var_dump($area_rectangulo);
?>