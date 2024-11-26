<?php
include("conexion.php");

if (isset($_POST['register'])) {
    // Verificar que los campos requeridos no estén vacíos
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phonenumber']) && !empty($_POST['password'])) {
        // Sanitizar entradas
        $name = mysqli_real_escape_string($conex, trim($_POST['name']));
        $email = mysqli_real_escape_string($conex, trim($_POST['email']));
        $phonenumber = mysqli_real_escape_string($conex, trim($_POST['phonenumber']));
        $password = mysqli_real_escape_string($conex, trim($_POST['password']));

        // Encriptar la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Consulta SQL para insertar los datos
        $consulta = "INSERT INTO usuario (Nombre_usuarios, Correo_electronico, Telefono, Contraseña, Rol_ID) 
                     VALUES ('$name', '$email', '$phonenumber', '$hashed_password', 1)";
        $resultado = mysqli_query($conex, $consulta);

        // Comprobar el resultado
        if ($resultado) {
            echo '<h3 class="success">Tu registro se ha completado</h3>';
        } else {
            echo '<h3 class="error">Error en la consulta: ' . mysqli_error($conex) . '</h3>';
        }
    } else {
        echo '<h3 class="error">Por favor, llena todos los campos</h3>';
    }
}
?>
