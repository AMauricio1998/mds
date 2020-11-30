<?php
if (
    !isset($_POST['idproducto']) || empty($_POST['idproducto'])
    || !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['descripcion']) || empty($_POST['descripcion'])
    || !isset($_POST['tipo']) || empty($_POST['tipo'])
    || !isset($_POST['material']) || empty($_POST['material'])
    || !isset($_POST['precio']) || empty($_POST['precio'])
    ) {
    header('Location: producto.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into producto set
idproducto = :idproducto
, nombre = :nombre
, descripcion = :descripcion
, tipo = :tipo
, material = :material
, precio = :precio
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':idproducto' => $_POST['idproducto']
    , ':nombre' => $_POST['nombre']
    , ':descripcion' => $_POST['descripcion']
    , ':tipo' => $_POST['tipo']
    , ':material' => $_POST['material']
    , ':precio' => $_POST['precio']
]);
header('Location: producto.php?info=Producto creado exitosamente: ' . $_POST['idproducto']);
?>