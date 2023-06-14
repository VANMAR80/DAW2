<?php 

//este archivo hace toda la lógica de nuestra web y llama a otros archivos para hacer el código más legible.

//por ejemplo tenemos esta función 
function suma($numero, $numero2){
	return $numero + $numero2;
}

include 'vista.php'; //incluye el código de otro archivo. Si hay un error aparece un Warning pero se ejecuta el resto de la web.

include_once 'vista.php'; //el código se ejecuta solo una vez.

//require 'vista.php'; //require si hay un error muestra un fatal error y no se ejecuta el resto de la web. También puedes usar require_once.

?>