<?php
if (
    !isset($_POST['idcompra']) || empty($_POST['idcompra'])
    || !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['calle']) || empty($_POST['calle'])
    || !isset($_POST['cp']) || empty($_POST['cp'])
    || !isset($_POST['colonia']) || empty($_POST['colonia'])
    || !isset($_POST['numero']) || empty($_POST['numero'])
    || !isset($_POST['fecha']) || empty($_POST['fecha'])
    || !isset($_POST['producto']) || empty($_POST['producto'])
    || !isset($_POST['cantidad']) || empty($_POST['cantidad'])
    ) {
    header('Location: compra.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into compra set
idcompra = :idcompra
, nombre = :nombre
, calle = :calle
, cp = :cp
, colonia = :colonia
, numero = :numero
, fecha = :fecha
, producto = :producto
,cantidad = :cantidad
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':idcompra' => $_POST['idcompra']
    , ':nombre' => $_POST['nombre']
    , ':calle' => $_POST['calle']
    , ':cp' => $_POST['cp']
    , ':colonia' => $_POST['colonia']
    , ':numero' => $_POST['numero']
    , ':fecha' => $_POST['fecha']
    , ':producto' => $_POST['producto']
    , ':cantidad' => $_POST['cantidad']
]);
header('Location: compra.php?info=Producto cargado exitosamente: ' . $_POST['idcompra']);
?>