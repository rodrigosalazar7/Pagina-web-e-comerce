<?php
// Conexión a la base de datos
$conex = mysqli_connect("localhost", "root", "Rodyvalen#1", "registro");

// Verificar conexión
if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
