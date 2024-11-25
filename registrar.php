<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $name = mysqli_real_escape_string($conex, trim($_POST['name']));
        $email = mysqli_real_escape_string($conex, trim($_POST['email']));
        $password = mysqli_real_escape_string($conex, trim($_POST['password']));
        $fecha = date("Y-m-d");

        // Insertar datos en la tabla "datos"
        $consulta = "INSERT INTO datos (nombre, email, contraseña, fecha) 
                     VALUES ('$name', '$email', '$password', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);

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
