<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosregispadre.css">
    <title>Registropadre</title>
</head>
<body>
<div class="container">
		<h2>Registro Padre</h2>
		<form action="php/registropadre_be.php" method="POST">
			<label>Nombre</label>
			<input type="text" name="name">

			<label>Apellido</label>
			<input type="text" name="lastname">

			<label>CI</label>
			<input type="text" name="carnet">

			<label>Correo</label>
			<input type="text" name="Gmail">

			<label>Contraseña</label>
			<input type="password" name="pasword">

			<button>Crearcuenta</button>

			<div class="error-message">
				<!-- Aquí se puede mostrar un mensaje de error en caso de que las credenciales sean incorrectas -->
			</div>
		</form>
	</div>
</body>
</html>