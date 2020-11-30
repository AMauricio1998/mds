<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminaciones  lógicas de registros en la BD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container" style="height:900px">
<div class="row">
    <div class="col">
        <h2 class="text-center" >Usuarios activos en la pagina</h2>
        <form action="consultar.php" method="GET" class="form-inline">
            <input type="search" name="criterio" id="criterio" placeholder="Buscar.." class="form-control mr-sm-2">
            <input type="submit" value="Buscar" class="btn btn-outline-success">
        </form>
        <br>    
            <table class="table table-striped table-dark table-bordered table-hover">
            <caption class="text-center"> Tabla 1. Usuarios registrados en la Base de datos </caption>
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
                        $usu = new cliente(); 
                        if(isset($_GET['criterio'])){ 
                            $criterio = $_GET['criterio'];                    
                            $res = $usu->consultar_criterio($criterio);
                        }
                        else{
                            $res = $usu->consultar();
                        }
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
                                 echo "<tr>
                                 <td> $idcliente           </td> 
                                 <td> $nombre           </td> 
                                 <td> $primer_apellido  </td>
                                 <td> $segundo_apellido </td>
                                 <td> $telefono         </td>
                                 <td> $correo           </td>
                                 <td> $contrasena       </td>
                                 <td> $perfil           </td>
                                 <td> $activo           </td>
                                    <td> <a href='eliminar2.php?idcliente=$idcliente'><img  width='30' heigh ='35' src='images/basura.png'</a> </td>
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