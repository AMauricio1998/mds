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
                <h2 class="text-center">Objetos registrados en la basde de datos  </h2>
                <caption class="text-center"> Objetos registrados en la basde de datos </caption>
                <thead>
                    <tr>
                    <th>id_objeto   </th>
					<th>nombre      </th>
                    <th>descripcion </th>
                    <th>precio      </th>
                    <th>imagen      </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "consultas.php";
                    $usu =new cliente();
                    $res = $usu->consultar_objeto();  
                    while($fila = mysqli_fetch_array($res)){
                                 $id_objeto               = $fila['id_objeto'];
                                 $nombre                  = $fila['nombre'];
                                 $descripcion             = $fila['descripcion'];
								 $precio                  = $fila['precio']; 
                                 $imagen                  = $fila['imagen'];
                   echo " <tr>
                   
                   <td> $id_objeto    </td> 
                   <td> $nombre       </td> 
                   <td> $descripcion  </td>
                   <td> $precio       </td>
                   <td> $imagen       </td>
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