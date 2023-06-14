<?php
function elements($a, $b,$c){
$dismicriminante=$b**2-4*$a*$c;
//declaramos las 3 variables en forma de función
if (($dismicriminante)>=0){
	$solucion[0]=(-$b-sqrt($dismicriminante))/(2*$a);
	$solucion[1]=(-$b+sqrt($dismicriminante))/(2*$a); 
	return $solucion;
	//return $solucion2;
}
else{echo 'Esta ecuación no tiene ningún resultado en el cuerpo de los números reales ';
}
}
$solucion= elements (85, 3,-19);
echo print_r($solucion);
//echo $solucion2;
?>