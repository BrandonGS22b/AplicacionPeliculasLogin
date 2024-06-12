<?php


$conexion = new Conexion();

$sql = "SELECT * FROM peliculas";
$datos = $conexion->consultar($sql);

$sql = "SELECT * FROM administradores";

$datos2 = $conexion->consultar($sql);

$sql = "SELECT * FROM comentarios";
$datos3 = $conexion->consultar($sql);

// Resto de tu código...

?>