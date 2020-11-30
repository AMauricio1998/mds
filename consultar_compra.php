<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta a la base de datos Mysql  </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<body>
    <div class="container bg-primary " style="heigth: 900px";>
    <div class="row">
        <div class="row d-flex justify-content-center">
            <table class="table table-striped table-dark table-bordered  table-hover ">
                <h2 class="text-center">Compras registrados en la basde de datos  </h2>
                <caption class="text-center"> Compras registrados en la basde de datos  </caption>
                <thead>
                    <tr>
                    <th>idcompra</th>
					<th>Nombre</th>
                    <th>Calle</th>
                    <th>CP</th>
                    <th>Colonia</th>
                    <th>Numero</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "consultas.php";
                    $usu =new cliente();
                    $res = $usu->consultar_compra();  
                    while($fila = mysqli_fetch_array($res)){
                                 $idcompra            = $fila['idcompra'];
                                 $nombre              = $fila['nombre'];
                                 $calle               = $fila['calle'];
								 $cp                  = $fila['cp']; 
								 $colonia             = $fila['colonia'];
                                 $numero              = $fila['numero']; 
                                 $fecha               = $fila['fecha']; 
                                 $producto            = $fila['producto']; 
                                 $cantidad            = $fila['cantidad']; 
                   echo " <tr>
                   
                   <td> $idcompra </td> 
                   <td> $nombre   </td> 
                   <td> $calle    </td>
                   <td> $cp       </td>
                   <td> $colonia  </td>
                   <td> $numero   </td>
                   <td> $fecha    </td>
                   <td> $producto </td>
                   <td> $cantidad </td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>