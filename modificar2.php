<?php
$idcliente           = $_GET['idcliente'];
$nombre              = $_GET['nombre'];
$primer_apellido     = $_GET['primer_apellido'];
$segundo_apellido    = $_GET['segundo_apellido']; 
$telefono            = $_GET['telefono'];
$correo              = $_GET['correo']; 
$contrasena          = $_GET['contrasena']; 
$perfil              = $_GET['perfil']; 
$activo              = $_GET['activo'];


include "consultas.php";
$usu = new cliente();

$usu->idcliente              = $idcliente;
$usu->nombre                 = $nombre;
$usu->primer_apellido        = $primer_apellido;
$usu->segundo_apellido       = $segundo_apellido;
$usu->telefono               = $telefono;
$usu->correo                 = $correo;
$usu->contrasena             = $contrasena;
$usu->perfil                 = $perfil;
$usu->activo                 = $activo;

$usu->modificar();



?>