<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ventas</title>
    <link rel="stylesheet" href="E/PIAPROWEB/Estilos-principal.css">
    <link rel="stylesheet" href="/PIAPROWEB/E-Navbar.css">
    <link rel="stylesheet" href="E-Venta.css">
</head>
<body>
    <header>
        <div class="logo">
            <a class="coco" href="http://localhost/PIAPROWEB/P-Admin/P-Principal-Admin.php">CocoShop</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar productos...">
            <button>Buscar</button>
        </div>
        <nav>
            <a href="#productos">Productos</a>
        </nav>
        <nav>
            <a href="http://localhost/PIAPROWEB/P-micuenta.php">Mi cuenta</a>
        </nav>
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
            <a href="http://localhost/PIAPROWEB/P-Admin/P-MOD.PHP">Administrar</a>
        </nav>
    </div>
    <!-- Contenido principal -->
    <main>
        <h1>Página de Ventas</h1>
        <div class="container">
            <!-- Primera columna -->
            <div class="card">
                <input type="text" placeholder="Nombre">
                <textarea placeholder="Descripción" rows="3"></textarea>
                <input type="number" placeholder="Precio ($)">
                <input type="text" placeholder="Talla">
                <input type="number" placeholder="Unidades">
                <button>Guardar</button>
                <select>
                    <option>Categoría</option>
                    <option>Playeras</option>
                    <option>Calcetas</option>
                    <option>Gorras</option>
                </select>
            </div>
            <!-- Segunda columna -->
            <div class="card">
                <div class="add-product">Añadir producto +</div>
            </div>
            <!-- Tercera columna -->
            <div class="card">
    <a href="http://localhost/PIAPROWEB/P-Admin/P-CArticulos.php" style="text-decoration: none; color: inherit;">
        <div class="view-articles">Ver mis artículos ></div>
    </a>
</div>
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>