<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $conexion = mysqli_connect("localhost", "root", "Rodyvalen#1", "prograweb");

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $consulta = "SELECT * FROM usuario WHERE Nombre_usuarios='$usuario' AND Contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {
        $_SESSION['usuario'] = $usuario;
        header("location:P-Principal.php");
        exit();
    } else {
        echo '<h1 class="bad">Error en la autenticación</h1>';
        require_once("P-IniciarSesion.php"); // Asegúrate de usar `require_once`
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
} else {
    require_once("P-IniciarSesion.php");
}
?>
