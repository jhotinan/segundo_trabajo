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

    <main class="bg-info">
    <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="factura.php" method="POST">
                    <h3 class="text-center mb-4">Factura de su compra</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 2" name="producto2">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 3" name="producto3">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 4" name="producto4">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio4">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 5" name="producto5">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio5">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="botonCalcular">Calcular</button>
                </form>

                <?php
                    if(isset($_POST["botonCalcular"])):
                ?>
                <br>
                <h6>
                    <?php
                    $precio1=$_POST["precio1"];
                    $producto1=$_POST["producto1"]; 

                    $precio2=$_POST["precio2"];
                    $producto2=$_POST["producto2"];

                    $precio3=$_POST["precio3"];
                    $producto3=$_POST["producto3"];

                    $precio4=$_POST["precio4"];
                    $producto4=$_POST["producto4"];

                    $precio5=$_POST["precio5"];
                    $producto5=$_POST["producto5"];
                    
                    $total=$precio1+$precio2+$precio3+$precio4+$precio5;

                    echo("El producto 1 es: ".$producto1."-----($) ".$precio1);
                    echo("<br>");
                    echo("El producto 2 es: ".$producto2."-----($) ".$precio2); 
                    echo("<br>");
                    echo("El producto 3 es: ".$producto3."-----($) ".$precio3); 
                    echo("<br>");
                    echo("El producto 4 es: ".$producto4."-----($) ".$precio4);
                    echo("<br>");
                    echo("El producto 5 es: ".$producto5."-----($) ".$precio5); 
                    echo("<br>");
                    echo("<br>");
                    echo("El total de la compra es: " .$total); 
                    

                ?>
                </h6>
                <?php
                endif
            ?>
            </div>
        </div>
        <br>
        <br>
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