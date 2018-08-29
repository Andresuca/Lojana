<?php
session_start();
include_once("../../../sistema/conexion.php");
include_once("../../../sistema/add.php");
// include_once("../login/login.php");

print_r($_SESSION);
die();

// $usuario = login::validar();

// print_r(json_decode($usuario));

?>
