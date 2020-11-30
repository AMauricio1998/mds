<?php
session_start();
if(!isset($_SESSION['idcliente']) || empty($_SESSION['idcliente'])){
    header('Location: registro.php?info=Ingresa tus credenciales');
  exit;
}