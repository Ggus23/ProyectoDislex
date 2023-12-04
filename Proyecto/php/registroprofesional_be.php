<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$ci = $_POST['ci'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Validar que todos los campos requeridos estén presentes y no estén vacíos
if (empty($nombre) || empty($ci) || empty($correo) || empty($contrasena)) {
    echo '
        <script>
            alert("Todos los campos son obligatorios");
            window.location="../index.php";
        </script>
    ';
    exit; // Detener la ejecución del script si faltan campos obligatorios
}

// Validar formato de correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo '
        <script>
            alert("El correo electrónico ingresado no es válido");
            window.location="../index.php";
        </script>
    ';
    exit;
}

// Validar formato de CI (solo números)
if (!is_numeric($ci)) {
    echo '
        <script>
            alert("El CI ingresado no es válido");
            window.location="../index.php";
        </script>
    ';
    exit;
}

// Sanitizar los datos ingresados para prevenir ataques de inyección de código
$nombre = mysqli_real_escape_string($conexion, $nombre);
$ci = mysqli_real_escape_string($conexion, $ci);
$correo = mysqli_real_escape_string($conexion, $correo);
$contrasena = mysqli_real_escape_string($conexion, $contrasena);

$query = "INSERT INTO profesional (nombre, ci, correo, contraseña) 
          VALUES ('$nombre', '$ci', '$correo', '$contrasena')";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado");
            window.location="../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Usuario no almacenado");
        </script>
    ';
}
?>