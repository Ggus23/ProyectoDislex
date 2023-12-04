<?php
include "conexion_be.php";

// Obtener los parámetros GET
$nombre = $_GET['nombre'] ?? '';
$ci = $_GET['ci'] ?? '';
$correo = $_GET['correo'] ?? '';
$contrasena = $_GET['contrasena'] ?? '';

// Construir la consulta SQL con los filtros
$query = "SELECT * FROM profesional WHERE 1=1";

if (!empty($nombre)) {
    $query .= " AND nombre LIKE '%$nombre%'";
}

if (!empty($ci)) {
    $query .= " AND ci = '$ci'";
}

if (!empty($correo)) {
    $query .= " AND correo LIKE '%$correo%'";
}

if (!empty($contrasena)) {
    $query .= " AND contraseña LIKE '%$contrasena%'";
}

$result = mysqli_query($conexion, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['ci'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['contraseña'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr>";
    echo "<td colspan='5'>No se encontraron profesionales.</td>";
    echo "</tr>";
}
?>