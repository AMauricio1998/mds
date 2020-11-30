<?php
include './conexion.php';
include './config.php';
include './carrito.php';
?>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulseras</title>
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
                    <a class="nav-link" href="pulseras.php">Catalogo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="perfil.html"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="mostrarcarrito.php"><i class="fa fa-shopping-cart"> </i> Compras (<?php 
                        echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                        
                        ?>) </a>
                        <a class="dropdown-item" href="envio.html"><i class="fa fa-shipping-fast"> </i> Envio </a>
                        <a class="dropdown-item" href="catalogo.html"><i class="fa fa-images"> </i> Catalogo </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php if($mensaje!="") {?>
    <div class="alert alert-success">
        <?php
        echo $mensaje;
        ?>
        <a href="mostrarcarrito.php" class="badge badge-success">Ver Carrito</a>
      <?php }?>
    </div>
    <?php
   $sentencia= $conexion->prepare('select * from objetos');
    $sentencia->execute();
    $listaPulseras=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($listaPulseras); 
    
     ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-gem"> </i> Catalogo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <h5><a class="btn btn-info float-right" href="catalogo.html" role="button">Regresar</a></h5>
         </div>
         <?php foreach ($listaPulseras as $producto) {?>
            
            <div class="container  mt-3">
                <div class="row">
                    <div class="col-3">
                        <div class="card-header" style="width: 18rem;" >
                            <img src="<?php echo $producto['imagen'];?>" class="card-img" heigth="317px">
                            <div class="card-body">
                                <p class="card-text"><?php echo $producto['nombre'];?></p>
                                <p class="card-text">$<?php echo $producto['precio'];?></p>
                                <p class="card-text"><?php echo $producto['descripcion'];?></p>
                                <Form action='' method="post">
                                    <input type="hidden" name="id_objeto" id="id_objeto" value=<?php echo  openssl_encrypt($producto['id_objeto'],COD,KEY);?>>
                                    <input type="hidden" name="nombre" id="nombre" value=<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>>
                                    <input type="hidden" name="precio" id="precio" value=<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>>
                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo  openssl_encrypt(1,COD,KEY);?>">
                                    <button type="submit" name='btnAccion' value='Agregar'class="btn btn-dark">Comprar</button>
                                </Form>    
                            </div>
                        </div>
                    </div>
                    
                
                    <?php } ?>
                
                    </div>
            </div>
        </div>
    <script>
    </script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>