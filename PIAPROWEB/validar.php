<?php
// Iniciar sesión si aún no está activa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Validar que los datos se reciban por POST
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "Rodyvalen#1", "prograweb");

    // Verificar si la conexión es exitosa
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta SQL para verificar usuario
    $consulta = "SELECT * FROM usuario WHERE Nombre_usuarios='$usuario'";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si hay errores en la consulta
    if (!$resultado) {
        die("Error en la consulta SQL: " . mysqli_error($conexion));
    }

    // Comprobar si se encontró el usuario
    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {
        // Obtener los datos del usuario
        $usuario_db = mysqli_fetch_assoc($resultado);

        // Verificar la contraseña con password_verify() si está encriptada
        if (password_verify($contraseña, $usuario_db['Contraseña'])) {
            // Si la contraseña es correcta, iniciar sesión
            $_SESSION['usuario'] = $usuario;
            echo "Inicio de sesión exitoso. Redirigiendo...";
            header("location:P-Principal.php");
            exit();
        } else {
            // Si la contraseña no es correcta
            echo '<h1 class="bad">Usuario o contraseña incorrectos</h1>';
            require_once("P-IniciarSesion.php");
        }
    } else {
        // Si no se encuentra el usuario
        echo '<h1 class="bad">Usuario o contraseña incorrectos</h1>';
        require_once("P-IniciarSesion.php");
    }

    // Liberar resultado y cerrar conexión
    mysqli_free_result($resultado);
    mysqli_close($conexion);
} else {
    // Si no se enviaron datos por POST, mostrar formulario de inicio de sesión
    require_once("P-IniciarSesion.php");
}
?>
