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
                <h2 class="text-center">Envios registrados en la basde de datos  </h2>
                <caption class="text-center"> Envios registrados en la basde de datos </caption>
                <thead>
                    <tr>
                    <th>idenvio        </th>
					<th>idventa        </th>
                    <th>fecha          </th>
                    <th>estado_id      </th>
                    <th>municipio_id   </th>
                    <th>calle          </th>
                    <th>codigo_postal  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "consultas.php";
                    $usu =new cliente();
                    $res = $usu->consultar_envio();  
                    while($fila = mysqli_fetch_array($res)){
                                 $idenvio                  = $fila['idenvio'      ];
                                 $idventa                  = $fila['idventa'      ];
                                 $fecha                    = $fila['fecha'        ];
								 $estado_id                = $fila['estado_id'    ]; 
								 $municipio_id             = $fila['municipio_id' ];
                                 $calle                    = $fila['calle'        ]; 
                                 $codigo_postal            = $fila['codigo_postal']; 
                   echo " <tr>
                   
                   <td> $idenvio       </td> 
                   <td> $idventa       </td> 
                   <td> $fecha         </td>
                   <td> $estado_id     </td>
                   <td> $municipio_id  </td>
                   <td> $calle         </td>
                   <td> $codigo_postal </td>
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