<?php
session_start();

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "12345678", "login");
if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Validar y sanitizar datos
$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';

if (empty($usuario) || empty($contraseña)) {
    header("Location: P-Iniciarsesion.php?error=emptyfields");
    exit();
}

// Usar sentencias preparadas para evitar inyección SQL
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    if (password_verify($contraseña, $row['contraseña'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: home.php");
        exit();
    } else {
        header("Location: P-Iniciarsesion.php?error=wrongpassword");
        exit();
    }
} else {
    header("Location: P-Iniciarsesion.php?error=usernotfound");
    exit();
}


$stmt->close();
mysqli_close($conex);
?>