<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sweet world</title>
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
                <a class="dropdown-item" href="#">Nada</a>
                <a class="dropdown-item" href="#">Nada</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Soporte</a>
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

        <?php
        $productos=array(
    
            array("producto1",1600,"marca","img/producto1.jpg"),

            array("producto2",5000,"marca","img/producto2.jpg"),

            array("producto3",2500,"marca","img/producto3.jpg"),

            array("producto4",7000,"marca","img/producto4.jpg"),

            array("producto5",7000,"marca","img/producto5.jpg"),

            array("producto6",7000,"marca","img/producto6.jpg"),

            array("producto7",7000,"marca","img/producto7.jpg"),

            array("producto8",7000,"marca","img/producto8.jpeg"),

            array("producto9",7000,"marca","img/producto9.jpeg"),

            array("producto10",7000,"marca","img/producto10.jpeg")

        );

        foreach($productos as $producto):?>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="<?php echo($producto[3]) ?>" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($producto[0])?></h5>
                        <p class="card-text"><?php echo($producto[1])?></p>
                        <p class="card-text"><?php echo($producto[2])?></p>
                    </div>
                </div>
              </div> 
            </div>  
        </div>

    <?php endforeach?>
        
        
    </main>
    <footer>
    
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>