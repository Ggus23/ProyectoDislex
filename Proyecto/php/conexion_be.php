<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "id20913567_root";
$password = "<-r@F#iVw0dbcUgq";
$dbname = "id20913567_dao";

// Crear una conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>
