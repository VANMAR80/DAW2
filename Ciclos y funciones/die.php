<?php 

echo "Soy un echo";
//die(); //A partir de esa función ya no se ejecuta nada. Es muy útil para probar cosas o si al conectar a una base de datos algo falla, cortamos.

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hola Mundo</h1>
	<?php die(); ?>
</body>
</html>