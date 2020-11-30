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
                    <a class="nav-link" href="pulseras.php">Productos</a>
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
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Envios </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            <div class="card-body">
                <form action="envio_guarda.php" method="post">
                    <div class="text-right">
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                    <div class="form-group">
                        <label for="paterno">Numero de compra</label>
                        <input type="text" class="form-control" id="idventa" name="idventa" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_cita">Fecha del envio</label>
                        <input type="date" class="form-control form-control-sm" id="fecha" name="fecha" aria-describedby="fechaHelp" min="2020-06-10">
                        <small id="fechaHelp" class="form-text text-muted">Selecciona la fecha de envio </small>
                    </div>
                    <div class="form-group">
                        <label for="paterno">Calle</label>
                        <input type="text" class="form-control" id="calle" name="calle" required>
                    </div>
                    <div class="form-group">
                        <label for="paterno">Codigo postal</label>
                        <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                    </div>
                    <div class="form-group">
                        <label for="estado_id">Estado</label>
                        <select class="form-control form-control-sm" id="estado_id" name="estado_id">
                        <option>Selecciona un estado</option>
                        <?php
                            $sql = 'select id, estado from estados order by estado asc';
                            foreach ($conexion->query($sql) as $registro) {
                                echo <<<fin
                            <option value="{$registro['id']}" >{$registro['estado']}</option>
                            fin;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="municipio_id">Municipio</label>
                        <select class="form-control form-control-sm" id="municipio_id" name="municipio_id">
                        <option value="">Selecciona un municipio</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(function (e) {
        $('#estado_id').change(function (e){
            $('#municipio_id').load('municipios.php?estado_id=' + $(this).val());
        });
    })
    </script>
</body>
</html>