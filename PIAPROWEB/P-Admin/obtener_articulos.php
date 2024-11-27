<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "Rodyvalen#1", "prograweb");

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta para obtener los datos
$consulta = "SELECT articulo_id, nombre, cantidad_stock, precio, categoria_id FROM articulo";
$resultado = mysqli_query($conexion, $consulta);

// Verificar si hay resultados
$articulos = [];
if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $articulos[] = $fila;
    }
}

// Liberar el resultado y cerrar conexión
mysqli_free_result($resultado);
mysqli_close($conexion);

// Retornar datos
return $articulos;
