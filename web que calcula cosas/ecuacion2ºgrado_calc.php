<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

$x1=(-$b+sqrt($b**2-4*$a*$c))/(2*$a);
$x2=(-$b-sqrt($b**2-4*$a*$c))/(2*$a);

echo "Las dos soluciones dentro del cuerpo de los números reales son: ";
echo "X1=" . $x1 .'<br/>';
echo "X2=" . $x2;
?>