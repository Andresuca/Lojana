<?php

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$bd = 'lojana';

$conn = new mysqli($host, $usuario, $contrasena, $bd);

if (!$conn) {
    echo 'No mames';
    exit();
}

// echo 'Si ahuevo';
// juanawais1101

?>
