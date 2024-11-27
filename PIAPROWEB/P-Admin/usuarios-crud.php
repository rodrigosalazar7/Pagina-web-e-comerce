<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "Rodyvalen#1", "prograweb");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta a la tabla 'usuario'
$consulta = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
            <td>{$fila['idUsuarios']}</td>
            <td>{$fila['Nombre_usuarios']}</td>
            <td>{$fila['Correo_electronico']}</td>
            <td>{$fila['Telefono']}</td>
            <td>{$fila['Contraseña']}</td>
            <td>{$fila['Rol_ID']}</td>
            <td>{$fila['Fecha']}</td>
            <td><button class='edit' data-id='{$fila['idUsuarios']}'>Editar</button></td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No se encontraron usuarios</td></tr>";
}

mysqli_close($conexion);
?>
