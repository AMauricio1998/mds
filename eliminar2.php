<?php
 $idcliente =$_GET ['idcliente'];
 include "consultas.php";
 $usu = new cliente();
 $usu-> idcliente = $idcliente;
 $usu -> elimiar_logica();


?>