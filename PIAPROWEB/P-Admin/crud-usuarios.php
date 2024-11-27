<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Usuarios</title>
    <link rel="stylesheet" href="/PIAPROWEB/Estilos-principal.css">
    <link rel="stylesheet" href="/PIAPROWEB/E-Navbar.css">
    <link rel="stylesheet" href="E-crud-usuarios.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a class="coco" href="http://localhost/PIAPROWEB/P-Admin/P-Principal-Admin.php">CocoShop</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Buscar usuarios...">
            <button>Buscar</button>
        </div>
        <nav>
            <a href="#usuarios">Usuarios</a>
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
        <h1>CRUD Usuarios</h1>
        <div class="crud-container">
            <!-- Tabla CRUD -->
            <table>
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Fecha</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Incluir el archivo PHP que contiene la lógica para obtener los usuarios
                    include('usuarios-crud.php');
                    
                    // Mostrar los usuarios en la tabla
                    foreach ($usuarios as $usuarios) {
                        echo "<tr data-id='{$usuario['idUsuario']}'>
                                <td>{$usuario['idUsuario']}</td>
                                <td class='nombre'>{$usuario['Nombre_usuarios']}</td>
                                <td class='correo'>{$usuario['Correo_electronico']}</td>
                                <td class='telefono'>{$usuario['Telefono']}</td>
                                <td class='contrasena'>{$usuario['Contraseña']}</td>
                                <td class='rol'>{$usuario['Rol_ID']}</td>
                                <td class='fecha'>{$usuario['Fecha']}</td>
                                <td><button class='edit'>Editar</button></td>
                                <td><button class='delete'>Eliminar</button></td>
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

    <script src="js/usuarios-crud.js"></script>
</body>
</html>
