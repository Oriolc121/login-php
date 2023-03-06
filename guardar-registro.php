<?php
	// Conectar a la base de datos
	$conexion = mysqli_connect('localhost', 'usuario', 'contraseña', 'basededatos');

	// Verificar si se envió el formulario de registro
	if(isset($_POST['submit'])) {
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		// Verificar si el usuario ya existe en la base de datos
		$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
		$resultado = mysqli_query($conexion, $sql);

		if(mysqli_num_rows($resultado) > 0) {
			// Mostrar mensaje de error si el usuario ya existe
			$error = "El nombre de usuario ya está en uso.";
		} else {
			// Insertar los datos del nuevo usuario en la base de datos
			$fecha = date('Y-m-d H:i:s');
			$sql = "INSERT INTO usuarios (usuario, password, fecha_registro) VALUES ('$usuario', '$password', '$fecha')";
			mysqli_query($conexion, $sql);

			// Redirigir al usuario a la página de inicio de sesión
			header('Location: index.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Registro</h1>

	<?php
		if(isset($error)) {
			echo "<p>$error</p>";
		}
	?>

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
