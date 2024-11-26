<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Coco Shop</title>
    <link rel="stylesheet" href="Estilo-registro.css">
    <link rel="stylesheet" href="E-Navbar.css">
    
</head>
<body>
<header>
    <div class="logo">
        <a class="coco" href="http://localhost/PIAPROWEB/P-Principal.php">CocoShop</a>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Buscar productos...">
        <button>Buscar</button>
    </div>
    <nav>
        <a href="#productos">Productos</a>
        <a href="http://localhost/PIAPROWEB/P-micuenta.php">Mi cuenta</a>
    </nav>
    <div class="icons">
        <a href="http://localhost/PIAPROWEB/P-carrito.php" title="Carrito">🛒</a>
        <a href="http://localhost/PIAPROWEB/P-Registro.php" title="Usuario">👤</a>
    </div>
</header>

<main class="login-container">
    <h1>Iniciar Sesión</h1>
    <form action="P-Iniciarsesion.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
    <p>¿No tienes una cuenta? <a href="Usuario-Reg.html">Regístrate aquí</a></p>
</main>
<?php
        include("validar.php");
    ?>

<footer>
    <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
</footer>
</body>
</html>