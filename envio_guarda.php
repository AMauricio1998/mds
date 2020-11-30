<?php
// print_r($_POST);
// exit;
if (
    !isset($_POST['idventa']) || empty($_POST['idventa'])
    || !isset($_POST['codigo_postal']) || empty($_POST['fecha'])
    || !isset($_POST['calle']) || empty($_POST['calle'])
    || !isset($_POST['codigo_postal']) || empty($_POST['codigo_postal'])
    || !isset($_POST['estado_id']) || empty($_POST['estado_id'])
    || !isset($_POST['municipio_id']) || empty($_POST['municipio_id'])
    ) {
    header('Location: envio_formu.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into envio set
 idventa = :idventa
, fecha = :fecha
, calle = :calle
, codigo_postal = :codigo_postal
, estado_id = :estado_id
, municipio_id = :municipio_id
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
     ':idventa' => $_POST['idventa']
    , ':fecha' => $_POST['fecha']
    , ':calle' => $_POST['calle']
    , ':codigo_postal' => $_POST['codigo_postal']
    , ':estado_id' => $_POST['estado_id']
    , ':municipio_id' => $_POST['municipio_id']
]);
header('Location: envio.php?info=envio creado exitosamente: ' . $_POST['idventa']);
?>