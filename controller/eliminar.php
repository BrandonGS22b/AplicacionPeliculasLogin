<?php

require_once("../conexion/conexion.php");

$id_pelicula = $_GET["id"];

$id_pelicula = (int)$id_pelicula;

$sql = "DELETE FROM peliculas WHERE id=". $id_pelicula;

$valid = Conexion::ejecutar($sql);

header("location: ../view/administrador/administrar.php");

?>