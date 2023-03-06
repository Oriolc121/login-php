<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
</head>
<body>
	<h1>Iniciar sesión</h1>

	<form method="post" action="login.php">
		<label for="usuario">Usuario:</label>
		<input type="text" name="usuario" id="usuario" required>
		<br><br>
		<label for="password">Contraseña:</label>
		<input type="password" name="password" id="password" required>
		<br><br>
		<input type="submit" name="submit" value="Iniciar sesión">
	</form>

	<p>¿No tienes una cuenta? <a href="registro.php">Crear cuenta</a></p>
</body>
</html>
