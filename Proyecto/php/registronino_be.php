<?php

include 'conexion_be.php';

$idpadre = $_POST['idpadre'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$contrasena = $_POST['contrasena'];
$infomedica = $_POST['InfoMedica'];
$InfoNino = $_POST['InfoNino'];

// Validación de datos
if (empty($idpadre) || empty($nombre) || empty($apellido) || empty($genero) || empty($contrasena) || empty($infomedica) || empty($InfoNino)) {
    echo '
    <script>
        alert("Por favor, complete todos los campos.");
        window.location="../index.php";
    </script>
    ';
    exit; // Detiene la ejecución del script si hay campos vacíos
}

// Aquí puedes agregar más validaciones según tus requisitos (por ejemplo, validación de formato, longitud, etc.)

$query = "INSERT INTO niño (id_padre, nombre, apellido, genero, contrasena, info_medica, info_nino) 
        VALUES ('$idpadre', '$nombre', '$apellido', '$genero', '$contrasena', '$infomedica', '$InfoNino')";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Usuario almacenado.");
        window.location="../index.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Error al almacenar el usuario.");
    </script>
    ';
}
?>