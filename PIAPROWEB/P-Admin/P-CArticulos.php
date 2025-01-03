<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Artículos</title>
    <link rel="stylesheet" href="/PIAPROWEB/Estilos-principal.css">
    <link rel="stylesheet" href="/PIAPROWEB/E-Navbar.css">
    <link rel="stylesheet" href="E-articulos-crud.css">
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
            <a href="http://localhost/PIAPROWEB/P-Admin/P-ventas.php">Ventas</a>
            <a href="http://localhost/PIAPROWEB/P-Admin/P-MOD.PHP">Administrar</a>
        </nav>
    </div>
    <!-- Contenido principal -->
    <main>
        <h1>CRUD Artículos</h1>
        <div class="crud-container">
            <!-- Barra de búsqueda -->
            <div class="search-bar-crud">
                <input type="text" placeholder="Buscar artículo">
                <button>✔</button>
            </div>
            <!-- Tabla CRUD -->
            <table>
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Artículo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Categoría ID</th>
                        <th>Agregar</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Incluir el archivo PHP que obtiene los datos
                    require_once 'obtener_articulos.php';

                    // Mostrar los datos en la tabla
                    foreach ($articulos as $fila) {
                        echo "<tr>
                                <td>{$fila['articulo_id']}</td>
                                <td>{$fila['nombre']}</td>
                                <td>{$fila['cantidad_stock']}</td>
                                <td>{$fila['precio']}</td>
                                <td>{$fila['categoria_id']}</td>
                                <td><button class='add'>+</button></td>
                                <td><button class='delete'>-</button></td>
                                <td><button class='edit'>#</button></td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
