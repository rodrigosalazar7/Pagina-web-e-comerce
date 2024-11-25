<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi E-commerce</title>
    <link rel="stylesheet" href="E-Playera.css">
    <link rel="stylesheet" href="E-Navbar.css">
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

        <!-- Íconos de usuario y carrito -->
        <div class="icons">
            <a href="#carrito" title="Carrito">🛒</a>
            <a href="http://localhost/PIAPROWEB/P-Registro.php" title="Usuario">👤</a>
        </div>
    </header>
    <div class="subheader">
    <nav class="textosubheader">
        <a href="#categorias">Categorías</a>
        <a href="#playeras">Playeras</a>
        <a href="#calcetas">Calcetas</a>
        <a href="#gorras">Gorras</a>
        <a href="SobreNosotros.html">Sobre Nosotros</a>
        <a href="#contacto">Contáctanos</a>
    </nav>
    </div>


    <div class="container mt-4">
  <div class="row">
    <!-- Primera Card -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="Imagenes/camisa-blanca.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Playera Blanca</h5>
          <p class="card-text">Playera Blanca Basica</p>
          <a href="#" id="botonplayera" class="btn btn-primary">Añadir</a>
          <a href="#" id="botonplayeratalla" class="btn btn-primary">Talla</a>
        </div>
      </div>
    </div>
    <!-- Segunda Card -->
    <div class="col-md-4">
      <div class="card" style="width: 92%;">
        <img src="Imagenes/camisa-gris.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Playera Gris</h5>
          <p class="card-text">Playera Gris Basica</p>
          <a href="#" id="botonplayera" class="btn btn-primary">Añadir</a>
          <a href="#" id="botonplayeratalla" class="btn btn-primary">Talla</a>
        </div>
      </div>
    </div>
    <!-- Tercera Card -->
    <div class="col-md-4">
      <div class="card" style="width: 95%;">
        <img src="Imagenes/camisa-negra.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Playera Negra</h5>
          <p class="card-text">Playera Negra Basica</p>
          <a href="#" id="botonplayera" class="btn btn-primary">Añadir</a>
          <a href="#" id="botonplayeratalla" class="btn btn-primary">Talla</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <footer>
        <p>&copy; 2024 Coco Shop. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
