<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
    <link rel="stylesheet" href="E-carrito.css">
</head>
<body>
    <!-- Navbar -->
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
        </nav>
        <div class="icons">
            <a href="#carrito" title="Carrito">🛒</a>
            <a href="http://localhost/PIAPROWEB/P-Registro.php" title="Usuario">👤</a>
        </div>
    </header>
    <div class="subheader">
        <nav>
            <a href="#categorias">Categorías</a>
            <a href="#playeras">Playeras</a>
            <a href="#calcetas">Calcetas</a>
            <a href="#gorras">Gorras</a>
            <a href="SobreNosotros.html">Sobre Nosotros</a>
            <a href="#contacto">Contáctanos</a>
        </nav>
    </div>
    <!-- Carrito -->
    <div class="cart-container">
        <h1>Mi carrito</h1>
        <table class="cart-table">
            <tr>
                <td><img src="????" alt="Camisa Coco Blanca" class="cart-img"></td>
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
</body>
</html>