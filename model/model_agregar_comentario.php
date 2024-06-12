<?php


// Crear una instancia de la clase Conexion
$conexion = new Conexion();

$pelicula = $_GET['pelicula'];
$sql = "SELECT * FROM comentarios WHERE pelicula_id = '{$pelicula}'";

// Llamar al método consultar() en la instancia de Conexion
$datos = $conexion->consultar($sql);
?>

