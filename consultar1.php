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
                <h2 class="text-center">Clientes registrados en la basde de datos  </h2>
                <caption class="text-center"> Tabla 1.Usuarios registrados en la basde de datos </caption>
                <thead>
                    <tr>
                    <th>idcliente</th>
					<th>Nombre</th>
                    <th>Primer Apelido</th>
                    <th>Segundo Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Perfil</th>
                    <th>Activo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "consultas.php";
                    $usu =new cliente();
                    $res = $usu->consultar();  
                    while($fila = mysqli_fetch_array($res)){
                                 $idcliente = $fila['idcliente'];
                                 $nombre              = $fila['nombre'];
                                 $primer_apellido     = $fila['primer_apellido'];
								 $segundo_apellido    = $fila['segundo_apellido']; 
								 $telefono            = $fila['telefono'];
                                 $correo              = $fila['correo']; 
                                 $contrasena          = $fila['contrasena']; 
                                 $perfil              = $fila['perfil']; 
                                 $activo              = $fila['activo']; 
                   echo " <tr>
                   
                   <td> $idcliente           </td> 
                   <td> $nombre           </td> 
                   <td> $primer_apellido  </td>
                   <td> $segundo_apellido </td>
                   <td> $telefono         </td>
                   <td> $correo           </td>
                   <td> $contrasena       </td>
                   <td> $perfil           </td>
                   <td> $activo           </td>
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