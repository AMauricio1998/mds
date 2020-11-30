<?php
require_once './checa_sesion.php';
?>
<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamnd</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.html"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="diamond.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.html">Ofertas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="perfil.html"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="mostrarcarrito.php"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="envio.html"><i class="fa fa-shipping-fast"> </i> Envio </a>
                        <a class="dropdown-item" href="catalogo.html"><i class="fa fa-images"> </i> Catalogo </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.html">Registrarse</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="card testimonial-card">
          <div class="card-up rainy-ashville-gradient">
          </div>
          <div class="avatar mx-auto"><img src="img/yo.jpg" class="rounded-circle img-responsive" alt="Example photo">
            <div class="card-body">
              </div><div class="card">
                <div class="card-header">
                  <h5><a class="btn btn-info float-right" href="perfil.html" role="button">Guardar</a>Mi informacion </h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno">
                    </div>
                    <div class="form-group">
                        <label for="materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno">
                    </div>
                    <div class="form-group">
                        <label for="rfc"></label>
                        <input type="text" class="form-control" id="rfc" name="rfc">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Numero de telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="correr">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo">
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>