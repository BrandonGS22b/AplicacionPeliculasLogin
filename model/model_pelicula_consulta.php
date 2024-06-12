<?php
$conexion = new Conexion();

$pelicula = $_GET['pelicula'];
$sql ="SELECT * FROM peliculas WHERE id = '{$pelicula}'";
$datos = $conexion->consultar($sql);

?>