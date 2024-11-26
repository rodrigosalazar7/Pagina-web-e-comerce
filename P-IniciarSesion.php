<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Coco Shop</title>
    <link rel="stylesheet" href="Estilo-registro.css">
    <link rel="stylesheet" href="E-Navbar.css">
</head>
<body>
<header>
        <!-- Nombre de la página -->
        <div class="logo">
            <a class="coco"href="http://localhost/PIAPROWEB/P-Principal.php">CocoShop</a>
        </div>

        <!-- Barra de búsqueda -->
        <div class="search-bar">
            <input type="text" placeholder="Buscar productos...">
            <button>Buscar</button>
        </div>

        <!-- Barra de navegación -->
        <nav>
            <a href="#productos">Productos</a>
        </nav>
        <nav>
            <a href="http://localhost/PIAPROWEB/P-micuenta.php">Mi cuenta</a>
        </nav>
        <!-- Íconos de usuario y carrito -->
        <div class="icons">
            <a href="http://localhost/PIAPROWEB/P-carrito.php" title="Carrito">🛒</a>
            <a href="http://localhost/PIAPROWEB/P-Registro.php" title="Usuario">👤</a>
        </div>
    </header>
    <div class="subheader">
    <nav class="textosubheader">
        <a href="http://localhost/PIAPROWEB/P-Categorias.php">Categorías</a>
        <a href="http://localhost/PIAPROWEB/P-Playeras.php">Playeras</a>
        <a href="http://localhost/PIAPROWEB/P-Calcetas.php">Calcetas</a>
        <a href="http://localhost/PIAPROWEB/P-Gorras.php">Gorras</a>
        <a href="http://localhost/PIAPROWEB/P-SobreNosotros.php">Sobre Nosotros</a>
        <a href="http://localhost/PIAPROWEB/P-contactanos.php">Contáctanos</a>
    </nav>
    </div>


    <!-- Formulario de registro -->
    <main class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="P-Iniciarsesion.php" method="POST">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="Usuario-Reg.html">Regístrate aquí</a></p>

        <?php
            if (isset($error_message)) {
                echo "<p style='color: red;'>$error_message</p>";
            }
        ?>
    </main>

    <?php
if (isset($_GET['login']) && $_GET['login'] == 'success') {
    echo "<p style='color: green;'>Inicio de sesión exitoso. ¡Bienvenido!</p>";
} elseif (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
}
?>


    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
