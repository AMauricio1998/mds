<?php 
require_once './checa_sesion.php';
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
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.php"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href="diamond.php">Inicio <span class="sr-only">(current)</span></a>
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
                        <a class="dropdown-item" href="mostrarcarito.php"><i class="fa fa-shopping-cart"> </i> Compras (<?php 
                        echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                        ?>)</a>
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
    <br>
    <?php  if(!empty($_SESSION['CARRITO'])){ ?>
     
        <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus compras  </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                <th class="text-center">Joya </th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Total </th>
                <th class="text-center">Eliminar </th>
                </tr>
            </thead>
        <?php $total=0; ?>
         <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) {?>
         <tr>
             <td width="40%"><?php echo $producto['NOMBRE']?></td>
             <td width="15%" calss='text-center'><?php echo $producto['CANTIDAD']?></td>
             <td width="20%"calss='text-center'><?php echo $producto['PRECIO']?></td>
             <td width="20%"calss='text-center'><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2)?></td>
             <td width="5%">
             <form action="" method="post">
             <input type="hidden" 
             name="id_objeto" 
             id="id_objeto"
              value="<?php echo  openssl_encrypt($producto['id_objeto'],COD,KEY);?>">
             <button type="submit"
              name='btnAccion' 
              value='Eliminar'
              class="btn btn-dark">Borrar</button>
             </input>
             </form>            
               </td>
             <?php $total= $total+ ($producto['PRECIO']*$producto['CANTIDAD']); ?>
            <?php } ?>
            </tr>
        <tr>
            <td colspan='3' aling="right"><h3>TOTAL</h3></td>
            <td  aling="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>
        </tbody>
<?php } else{  ?>
<div class='alert alert-success'>No hay productos en el carrito...

</div>
<?php } ?>

        <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
