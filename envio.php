<?php
require_once './checa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
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
    <div class="row">
        <div class="col-md-12">
        <ul class="stepper stepper-horizontal">
            <li class="warning">
                <a href="#!">
                    <span class="circle"><i class="fas fa-dolly-flatbed"></i></span>
                    <span class="label">En preparación </span>
                </a>
            </li>    
            <li class="active">
                <a href="#!">
                    <span class="circle"><i class="fas fa-truck"></i></span>
                    <span class="label">En camino</span>
                </a>
            </li>
            <li class="completed">
                <a href="#!">
                    <span class="circle"><i class="fas fa-check"></i></span>
                    <span class="label">Entregado</span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Envios </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="e" class="text-success"></a>
                <a class="btn btn-info float-right" href="envio_formu.php" role="button">Añadir</a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                <th class="text-center">Numero de envio </th>
                <th class="text-center">Numero de compra</th>
                <th class="text-center">Fecha </th>
                <th class="text-center">Dirección </th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = 'select idenvio, idventa, fecha, calle, codigo_postal, estado_id, municipio_id from envio';
            foreach ($conexion->query($sql) as $registro) {
                $registro['idenvio'] = htmlentities($registro['idenvio']);
                $registro['idventa'] = htmlentities($registro['idventa']);
                $registro['fecha'] = htmlentities($registro['fecha']);
                $registro['estado_id'] = htmlentities($registro['estado_id']);
                echo <<<fin

                <tr>
                    <td>{$registro['idenvio']}</td>
                    <td>{$registro['idventa']}</td>
                    <td>{$registro['fecha']}</td>
                    <td>
                    {$registro['calle']},
                    {$registro['codigo_postal']},
                    {$registro['municipio_id']},
                    {$registro['estado_id']}
                    </td>
                </tr>
fin;
            }
            ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
</body>
</html>