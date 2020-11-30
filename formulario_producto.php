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
                <<li class="nav-item active">
                    <a class="nav-link" href="diamond_sesion.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pulseras.php">Ofertas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="perfil.html"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="mostrarcarrito.php"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="envio.php"><i class="fa fa-shipping-fast"> </i> Envio </a>
                        <a class="dropdown-item" href="catalogo.html"><i class="fa fa-images"> </i> Catalogo </a>
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
                <i class="fa fa-gem"></i> Tu producto
            </div>
            <div class="card-body">
                <form action="producto_guarda.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="nombre">Numero de pedido</label>
                        <input type="text" class="form-control" id="idproducto" name="idproducto" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"> 
                    </div>
					<label for="tipo">Tipo</label>
                    <select class="form-control" id="tipo" name="tipo">
                      <option value="">SELECCIONA</option>
                      <option value="Pulsera">Pulsera</option>
                      <option value="Anillo">Anillo</option>
                      <option value="Relojes">Relojes</option>
                      <option value="Pendientes">Pendientes</option>
					</select>
					<label for="material">Material</label>
                    <select class="form-control" id="material" name="material">
                      <option value="">SELECCIONA</option>
                      <option value="Chapa de oro">Chapa de oro</option>
                      <option value="Plata">Plata</option>
                      <option value="Oro blanco">Oro blanco</option>
                    </select>
                    <div class="form-group">
                        <label for="precio">Costo</label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="file-field">
                      <a class="btn-floating purple-gradient mt-0 float-left">
                        <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                        <input type="file" nane="archivo">
                      </a>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Inserta imagen">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>