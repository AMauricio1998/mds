<?php
if (
    !isset($_POST['correo']) 
    || empty($_POST['correo']) 
    || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)
    || !isset($_POST['contrasena']) 
    || empty($_POST['contrasena']) 
    ) {
    header('Location: registro.php?info=Escribe tu correo y contraseña');
    exit;
}
require_once './conexion.php';
$sql = 'select idcliente, nombre, primer_apellido, segundo_apellido, telefono, correo, perfil, contrasena from cliente where correo = :correo limit 1';
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':correo' => $_POST['correo']]);
$cliente = $sentencia->fetch(PDO::FETCH_ASSOC);
if(false == $cliente){
    header('Location: registro.php?info=Usuario no encontrado: ' . $_POST['correo']);
    exit;
}
if (!password_verify ($_POST['contrasena'] , $cliente['contrasena'])) {
   header('Location: registro.php?info=Contraseña incorrecta');
    exit;
}
session_start();
$_SESSION['idcliente'] = $cliente['idcliente'];
$_SESSION['nombre'] = $cliente['nombre'];
$_SESSION['primer_apellido'] = $cliente['primer_apellido'];
$_SESSION['segundo_apellido'] = $cliente['segundo_apellido'];
$_SESSION['telefono'] = $cliente['telefono'];
$_SESSION['correo'] = $cliente['correo'];
$_SESSION['perfil'] = $cliente['perfil'];
header('Location: diamond_sesion.php');
?>