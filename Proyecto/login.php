<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilostipousuario.css">
    <link rel="stylesheet" href="assets/css/estiloslogin.css">
    <title>Login</title>
</head>
<body>
<div class="container">

		<h2>Iniciar sesión</h2>
		<form>
			<label for="username">Nombre de usuario</label>
			<input type="text" id="username" name="username">

			<label for="password">Contraseña</label>
			<input type="password" id="password" name="password">

			<a href="menuprof.php" class="button2">Iniciar Sesion</a>
            <a href="tipousuario.php" class="button2">Crear Cuenta</a>
			<div class="error-message">
				<!-- Aquí se puede mostrar un mensaje de error en caso de que las credenciales sean incorrectas -->
			</div>
		</form>
	</div>
</body>
</html>