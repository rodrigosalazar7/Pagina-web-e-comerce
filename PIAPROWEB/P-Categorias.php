<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi E-commerce</title>
    <link rel="stylesheet" href="E-Playera.css">
    <link rel="stylesheet" href="E-Navbar.css">
    <link rel="stylesheet" href="E-card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <div class="cardcategorias" id="cardd" style="width: 18rem;">
  <div class="card-body">
    
    <a href="http://localhost/PIAPROWEB/P-Playeras.php" class="card-link">Playeras</a>

  </div>
</div>
<div class="card-container">
  <div class="cardcategorias" id="cardd" style="width: 18rem;">
    <div class="card-body">
      <a href="http://localhost/PIAPROWEB/P-Calcetas.php" class="card-link">Calcetas</a>
    </div>
  </div>
  <div class="cardcategorias" id="cardd" style="width: 18rem;">
    <div class="card-body">
      <a href="http://localhost/PIAPROWEB/P-Gorras.php" class="card-link">Gorras</a>
    </div>
  </div>
</div>
    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>