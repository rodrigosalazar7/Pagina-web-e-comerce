<?php
session_start(); // Inicia o reanuda la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    $conn = new mysqli("localhost", "root", "Rodyvalen#1", "prograweb");

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recibir credenciales del formulario
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));

    // Consulta para verificar si el correo existe
    $sql = "SELECT * FROM usuario WHERE Correo_electronico = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el usuario existe, verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['Contraseña'])) {
            // Contraseña correcta: guardar datos en la sesión
            $_SESSION['usuario'] = $row['Nombre_usuarios']; // Nombre de usuario
            $_SESSION['correo'] = $row['Correo_electronico']; // Correo del usuario
            $_SESSION['rol'] = $row['Rol_ID']; // Rol del usuario, si es relevante

            // Redirigir a la página principal con mensaje de éxito
            header("Location: P-Principal.php?login=success");
            exit();
        } else {
            $error_message = "Contraseña incorrecta.";
        }
    } else {
        $error_message = "El correo electrónico no está registrado.";
    }

    // Cerrar conexión
    $conn->close();
}
?>
