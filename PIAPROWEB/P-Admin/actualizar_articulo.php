<?php
// Verificar si se recibió el id y los nuevos datos
if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['stock']) && isset($_POST['precio']) && isset($_POST['categoria'])) {
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "Rodyvalen#1", "prograweb");

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Obtener los nuevos datos
    $articuloId = $_POST['id'];
    $nombre = $_POST['nombre'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];

    // Actualizar el artículo en la base de datos
    $consulta = "UPDATE articulo SET nombre='$nombre', cantidad_stock='$stock', precio='$precio', categoria_id='$categoria' WHERE articulo_id=$articuloId";

    if (mysqli_query($conexion, $consulta)) {
        // Responder con éxito
        echo json_encode(["success" => true]);
    } else {
        // Responder con error
        echo json_encode(["success" => false, "error" => mysqli_error($conexion)]);
    }

    mysqli_close($conexion);
}
?>
