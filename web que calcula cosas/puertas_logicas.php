<!DOCTYPE html>
<html>
<title>Resolución tablas lógicas</title>
<body>
	<h2>Resolución de tablas lógicas</h2>
<form method="POST" name="logica" action="logica.php">
	<p>Bit 1 <input type="integer" name="Bit_1" size="5"></p>
	<p>Bit 2 <input type="integer" name="Bit_2" size="5"></p>
	
	<label for="Puertas">Selecciona la puerta lógica</label>
		<select name="Puertas" id="Puertas">
			<option value="AND">AND</option>
			<option value="OR">OR</option>
			<option value="XOR">XOR</option>

		</select>


	<p><input type="reset" value="Restablecer" name="B2">&nbsp;<input type="submit" value="Calcular" name="B1"></p>
		<input type="button" onclick="window.location='ecuaciones_matematicas.php'" class="Redirect" value="Volver a página principal"/>
	</form>

</body>
</html>