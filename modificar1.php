<?php
$idcliente = $_GET['idcliente'];
include "consultas.php";
$usu = new cliente();
$usu ->idcliente = $idcliente;
$res  = $usu->consultar_registro();
$fila = mysqli_fetch_array($res);
//print_r ($fila);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificación de usuarios en la base de datos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<!-- <body>
<div class="container bg-primary" style= "heigth: 500px">
<div class="row justify-content-center" >
<div class="col-7 bg-info">
<h2 class="text-center">modificación de usuarios en la base de datos</h2>
<form action="modificar2.php" method="GET">

<label for="nombre">Id</label>
<input type="text" class="form-control" id="idcliente" name="idcliente" value="<?php echo $fila['idcliente']; ?>" readonly>

<label for="nombre">Nombre</label>
<input type="text" class="form-control" id="nombre" name="nombre" required>

<label for="paterno">Primer apellido</label>
<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" required>

<label for="materno">Segundo apellido</label>
<input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" >
                    
<label for="telefono">Telefono </label>
<input type="tel" class="form-control" id="telefono" name="telefono" required>
                       
<label for="correo">Correo</label>
<input type="email" class="form-control" id="correo" name="correo" required>
                       
<label for="contrasena">Contraseña</label>
<input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" required>

<label for="perfil1">Perfil</label><br>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="perfil" id="perfil1" value="Administrador">
<label class="form-check-label" for="perfil1">Admin.</label>

<input class="form-check-input" type="radio" name="perfil" id="perfil2" value="Cliente">
<label class="form-check-label" for="perfil2">Cliente</label>  

<input    type="submit" value="modificar" class=" btn btn-success">
<input  type="reset" value="cancelar" class=" btn btn-danger">

</label>
</form>
</div>
</div>
</div>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body> -->
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.html"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link">Registrate </a>
                </li>
            </ul>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="text-center">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <p class="h4 mb-4">Registrate</p>
            </div>
            <div class="card-body">
                <form action="modificar2.php" method="GET">
                <div class="form-group">
                        <label for="nombre">id</label>
                        <input type="text" class="form-control" id="idcliente" name="idcliente" value="<?php echo $fila['idcliente']; ?>" readonly required> 
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombre']; ?>"  required> 
                    </div>
                    <div class="form-group">
                        <label for="paterno">Primer apellido</label>
                        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="<?php echo $fila['primer_apellido']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="materno">Segundo apellido</label>
                        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo $fila['segundo_apellido']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono </label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $fila['telefono']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $fila['correo']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" value="<?php echo $fila['contrasena']; ?>" required>
                    </div>
                    
                    <button class="btn btn-info my-4 btn-block" type="submit">Modificar</button>
                </form>
            </div>
        </div>
    </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    
</body>
</html>