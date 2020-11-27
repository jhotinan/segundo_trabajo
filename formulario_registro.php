<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet world</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    
        <div class="container">
        <form class="mt-5" method="POST" action="registrarPersonas.php">
            
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre del producto" name="nombreproducto">
                </div>

                <div class="col">
                    <input type="number" class="form-control" placeholder="Precio" name="precio">
                </div>

            </div>

            <div class="row mt-3">
                    <div class="col">
                        <textarea class="form-control" rows="3" name="descripcion" placeholder="descripcion del producto"></textarea>
                    </div>
             </div>
             <br>

            <div class="row">
                <div class="col">
                    <input class="form-control" rows="3" name="ruta" placeholder="agregue aqui la url de la imagen"></input>
                </div>
            </div>
                
        
            <button type="submit" class="btn btn-info btn-block mt-3" name="boton">registrar</button>
        </form>
        
        </div>
    
    </main>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>