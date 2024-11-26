<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi E-commerce</title>
    <link rel="stylesheet" href="Estilos-principal.css">
    <link rel="stylesheet" href="E-Navbar.css">
    <link rel="stylesheet" href="E-carrito.css">
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

    <div class="cart-container">
        <h1>Mi carrito</h1>
        <table class="cart-table">
            <tr>
                <td><img src="Imagenes/camisa-blanca.png" alt="Camisa Coco Blanca" class="cart-img"></td>
                <td>Camisa Coco Blanca     Talla </td>
                <td>$0</td>
                <td>
                    <div class="quantity-controls">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </td>
            </tr>
        </table>
        <div class="cart-footer">
            <button class="next-button">Siguiente...</button>
            <span class="total">Total: $0</span>
        </div>
    </div>


  

    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
