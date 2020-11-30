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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Productos</h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="e" class="text-success"></a>
                <a class="btn btn-info float-right" href="formulario_compra.php" role="button">Añadir</a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                <th class="text-center">Numero de compra </th>
                <th class="text-center">Nombre </th>
                <th class="text-center">Calle</th>
                <th class="text-center">Cp</th>
                <th class="text-center">Colonia</th>
                <th class="text-center">Numero Interior</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Producto</th>

                
               
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = 'select idcompra, nombre, calle, cp, colonia, numero, fecha, cantidad, producto from compra';
            foreach ($conexion->query($sql) as $registro) {
                $registro['idcompra'] = htmlentities($registro['idcompra']);
                $registro['nombre'] = htmlentities($registro['nombre']);
                $registro['calle'] = htmlentities($registro['calle']);
                $registro['cp'] = htmlentities($registro['cp']);
                $registro['colonia'] = htmlentities($registro['colonia']);
                $registro['numero'] = htmlentities($registro['numero']);
                $registro['fecha'] = htmlentities($registro['fecha']);
                $registro['cantidad'] = htmlentities($registro['cantidad']);
                $registro['producto'] = htmlentities($registro['producto']);
                
                echo <<<fin

                <tr>
                    <td>{$registro['idcompra']}</td>
                    <td>{$registro['nombre']}</td>
                    <td>{$registro['calle']}</td>
                    <td>{$registro['cp']}</td>
                    <td>{$registro['colonia']}</td>
                    <td>{$registro['numero']}</td>
                    <td>{$registro['fecha']}</td>
                    <td>{$registro['cantidad']}</td>
                    <td>{$registro['producto']}</td>
                   
                </tr>
fin;
            }
            ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>