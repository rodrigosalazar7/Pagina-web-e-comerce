<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="E-Cuenta.css">
</head>
<body>
    <!-- Barra de navegación -->
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
            <a href="http://localhost/PIAPROWEB/P-Cuenta.php">Mi cuenta</a>
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
    
        <h1>Bienvenido a Coco Shop!</h1>
    

    <!-- Contenido principal -->
    <div class="container">
        <h1>Mi cuenta</h1>
        <div class="input-group">
            <input type="text" placeholder="Nombre">
            <img src="https://img.icons8.com/ios-filled/16/000000/edit.png" alt="Editar" class="edit-icon">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Ubicación">
            <img src="https://img.icons8.com/ios-filled/16/000000/edit.png" alt="Editar" class="edit-icon">
        </div>
        <div class="input-group">
            <input type="email" placeholder="Correo">
            <img src="https://img.icons8.com/ios-filled/16/000000/edit.png" alt="Editar" class="edit-icon">
        </div>
        <div class="input-group">
            <input type="password" placeholder="Cambiar contraseña">
            <img src="https://img.icons8.com/ios-filled/16/000000/edit.png" alt="Editar" class="edit-icon">
        </div>
        <button class="btn">Aplicar cambios</button>
    </div>
</body>
</html>