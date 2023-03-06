<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Registro</h1>

	<form method="post" action="guardar_registro.php">
		<label for="usuario">Usuario:</label>
		<input type="text" name="usuario" id="usuario" required>
		<br><br>
		<label for="password">Contraseña:</label>
		<input type="password" name="password" id="password" required>
		<br><br>
		<input type="submit" name="submit" value="Crear cuenta">
	</form>

	<p>¿Ya tienes una cuenta? <a href="index.php">Iniciar sesión</a></p>
</body>
</html>
