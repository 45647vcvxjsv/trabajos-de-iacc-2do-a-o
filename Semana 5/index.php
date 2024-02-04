<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Libro Errante </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-r5pyA2FiGGJwhaAO5DynzZc4ofr1MgHbwsppQ3jBcaML9fy/21b6c5tbpVudMu7g" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <header>
    <a href="agregaralcarrito.php"></a>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">El Libro Errante</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row mt-5">
      <div class="container-items">
        <div class="item">
          <img src="dias raros.jpg" alt="Producto 1">
          <figure>
            <h2>Dias Raros</h2>
            <p class="Price"> $1.200</p>
            <a href="agregaralcarrito.php?id=1" class="add=to-cart">Añadir al Carrito</a>
          </figure>
        </div>
        <div class="item">
          <img src="dragon.jpg" alt="Producto 2">
          <figure>
            <h2>Medievalario</h2>
            <p class="Price"> $3.200</p>
            <a href="agregaralcarrito.php?id=2" class="add=to-cart">Añadir al Carrito</a>
          </figure>
        </div>
        <div class="item">
          <img src="muneco.jpg" alt="Producto 3">
          <figure>
            <h2>Jo Nesbo</h2>
            <p class="Price"> $6.200</p>
            <a href="agregaralcarrito.php?id=3" class="add=to-cart">Añadir al Carrito</a>
          </figure>
        </div>
        <div class="item">
          <img src="santa maria.jpg" alt="Producto 4">
          <figure>
            <h2>Santa Maria</h2>
            <p class="Price"> $5.200</p>
            <a href="agregaralcarrito.php?id=4" class="add=to-cart">Añadir al Carrito</a>
          </figure>
        </div>       
        <div class="item">
          <img src="viento.jpg" alt="Producto 5">
            <figure>
              <h2>El Nombre Del viento</h2>
              <p class="Price"> $7.200</p>
              <a href="agregaralcarrito.php?id=5" class="add=to-cart">Añadir al Carrito</a>
            </figure>
        </div>
        <div class="item">
          <img src="mascaras.jpg" alt="Producto 6">
            <figure>
              <h2>Las Mascaras De Ripley</h2>
              <p class="Price"> $4.200</p>
              <a href="agregaralcarrito.php?id=6" class="add=to-cart">Añadir al Carrito</a>
            </figure>
        </div>
      </div>
    </div>
  </div>
</body>
</html>