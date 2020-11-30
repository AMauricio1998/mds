<?php
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
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
                    <a class="nav-link" href="producto.html">Ofertas</a>
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
                <input class="form-control mr-sm-2" type="search" placeholder="Busqueda " aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
            </form>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="producto.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-gem"></i> Tus Compras
            </div>
            <div class="card-body">
                <form action="compra_guarda.php" method="post" enctype="multipart/form-data">
                <button type="submit" class="btn btn-info">Guardar</button></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="paterno">Calle</label>
                    <input type="text" class="form-control" id="paterno" name="paterno">
                </div>
                <div class="form-group">
                    <label for="materno">Cp</label>
                    <input type="text" class="form-control" id="cp" name="cp">
                </div>
                <div class="form-group">
                    <label for="materno">Colonia</label>
                    <input type="text" class="form-control" id="colonia" name="colonia">
                </div>
                <div class="form-group">
                    <label for="telefono">Numero interior</label>
                    <input type="text" class="form-control" id="nume" name="nume">
                </div>
                <div class="form-group">
                        <label for="fecha_cita">Fecha del envio</label>
                        <input type="date" class="form-control form-control-sm" id="fecha" name="fecha" aria-describedby="fechaHelp" min="2020-06-10">
                        <small id="fechaHelp" class="form-text text-muted">Selecciona la fecha de envio </small>
                    </div>
                    <div class="form-group">
                    <label for="telefono">Cantidad</label>
                    <input type="text" class="form-control" id="nume" name="nume">
                </div>
            <div class="card-body">
                    <form action="#" method="post">
                        <label for="exampleFormControlSelect1">Producto</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option value="">SELECCIONA</option>
                          <option value="">Pulsera</option>
                          <option value="">Collar</option>
                          <option value="">Pendientes</option>
                          <option value="">Reloj</option>
                          <option value="">Anillo</option>
             </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Editable table -->
</div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
</head>
<body>