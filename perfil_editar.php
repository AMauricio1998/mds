<?php
require_once './checa_sesion.php';
if (!isset($_SESSION['idcliente']) || empty($_SESSION['idcliente'])) {
    header('Location: perfil.php?info=Selecciona tu perfil');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    idcliente
    , nombre
    , primer_apellido
    , segundo_apellido
    , telefono
    , correo
    , perfil
from
    cliente
where
    idcliente = :idcliente
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':idcliente' => $_SESSION['idcliente']]);
$cliente = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false === $cliente) {
    header('Location: perfil.php?info=No se encontró el perfil');
    exit;
}
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
                        <a class="dropdown-item" href="perfil.php"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="mostrarcarrito.php"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="envio.php"><i class="fa fa-shipping-fast"> </i> Envio </a>
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
                    <div class="card">
                            <div class="card-header">
                                <h5>Mi información</h5>
                            </div>
                            <div class="card-body">
                                <form action="perfil_actualiza.php" method="post">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo  $cliente['nombre'];?>" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="primer_apellido">Primer apellido</label>
                                        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="<?php echo $cliente['primer_apellido'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="materno">Segundo apellido</label>
                                        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo $cliente['segundo_apellido'];?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Telefono </label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente['telefono'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $cliente['correo'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contrasena">Contraseña</label>
                                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contrasena_confirma">Contraseña (confirma)</label>
                                        <input type="password" class="form-control form-control-sm" id="confirma_contrasena" name="confirma_contrasena" required>
                                    </div>
                                    <button class="btn btn-info my-4 btn-block" type="submit">Guardar</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>