<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <img src="img/logo.png" width="50" height="50" alt="logo">
        <a class="navbar-brand" href=""> Sweet world</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="factura.php">Facturación</a>
            </li>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="formulario_registro.php">Registro de productos</a>
                <a class="dropdown-item" href="listadoProductos.php">Edición</a>
                <a class="dropdown-item" href="#">Nada</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Nada</a>
              </div>
          </ul>
        </div>
      </div>
    </nav>
    </header>
    

    <main>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src=img/banner2.jpg class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <br>
    <br>


    <?php
    include ("BaseDatos.php");

    $operacionBD= new BaseDatos();

    $consultaSQL="SELECT * FROM `productos` WHERE 1";

    $productos=$operacionBD->consultarDatos($consultaSQL);

    
    
    
    ?>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto):?>

                <div class="col mb-4">
                    <div class="card h-100">
                    <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($producto["nombre"]) ?></h5>
                        <p class="card-text">Precio: <?php echo($producto["precio"])?> Pesos</p>
                        <p class="card-text"><?php echo($producto["descripcion"])?></p>
                                   
                    </div>
                 </div>

                 
        </div>
        <?php endforeach?>
    
    </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <footer class = "bg-dark text-light">
      <div class = "container">  
        <div class = "row">
          <div class = "col mb-4">   
          <br>
          <br>   
          Comunicate con nosotros: por medio de estos números 3196054120 o 4531233 y puedes preguntar por: Camila carvajal taborda, Jhonnathan ocampo diaz, isabella lopera castaño 27/11/2020,medellin
            </div>  
          </div>  
      </div>  
    </footer>

</body>
</html>