<?php 
  require_once("../models/conexion.php");
  require_once("../models/consultas.php");
  require_once("../controllers/mostrarMes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINTECTO PERSONAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="7000">
          <img src="img/3379230.jpg" class="d-block w-100 img-propio" alt="Imagen 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>PREMIACIÓN</h5>
            <h5>PRODUCTIVIDAD</h5>
            <h5><?php mostrarMes() ?></h5>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="img/4028570.jpg" class="d-block w-100 img-propio" alt="Imagen 2">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="img/mujer-sonriendo.jpg" class="imagen-columna" alt="Imagen 3">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h4><?php mostrarNombre() ?></h4>
                <h3><?php mostrarCargo() ?></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="img/3361694.jpg" class="d-block w-100 img-propio" alt="Imagen 4">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="img/disparo-alta-vista-hombre-sonriente-gorra.jpg" class="imagen-columna" alt="Imagen 5">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h4><?php mostrarNombreDos() ?></h4>
                <h3><?php mostrarCargoDos() ?></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="img/4028570.jpg" class="d-block w-100 img-propio" alt="Imagen 6">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="img/foto carnet (1).png" class="imagen-columna" alt="Imagen 7">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h4><?php mostrarNombreTres() ?></h4>
                <h3><?php mostrarCargoTres() ?></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="7000">
          <img src="img/3379230.jpg" class="d-block w-100 img-propio" alt="Imagen 2">
          <div class="carousel-caption d-none d-md-block">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="img/logo-trnasparente.png" class="imagen-logo" alt="Imagen 3">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <h4>!FELICITACIONES!</h4>
                <h3>Gracias por contribuir al alcence de nuestros objetivos en estos timpos desafiantes.<br>Agradecemos su esfuerzo y labor diaria.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="plugins/slick-carousel/slick/slick.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
</body>
</html>