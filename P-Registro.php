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

        <!-- Íconos de usuario y carrito -->
        <div class="icons">
            <a href="#carrito" title="Carrito">🛒</a>
            <a href="http://localhost/PIAPROWEB/P-Registro.php" title="Usuario">👤</a>
        </div>
    </header>
    <div class="subheader">
    <nav class="textosubheader">
        <a href="#categorias">Categorías</a>
        <a href="http://localhost/PIAPROWEB/P-Playeras.php">Playeras</a>
        <a href="#calcetas">Calcetas</a>
        <a href="#gorras">Gorras</a>
        <a href="SobreNosotros.html">Sobre Nosotros</a>
        <a href="#contacto">Contáctanos</a>
    </nav>
    </div>


    <!-- Formulario de registro -->
    <main class="register-container">
        <h1>Crear Cuenta</h1>
        <form action="registrar.php" method="POST">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="name" placeholder="Ingresa tu nombre completo" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

            <label for="phonenumber">Telefono:</label>
            <input type="phonenumber" id="phonenumber" name="phonenumber" placeholder="Ingrese su numero" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>

            <label for="confirm-password">Confirmar Contraseña:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirma tu contraseña" required>

            <button type="submit" name="register">Registrarse</button>
        </form>
        

        <p>¿Ya tienes una cuenta? <a href="usuarios.html">Inicia sesión aquí</a></p>
    </main>

    <?php
        include("registrar.php");
    ?>



    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
