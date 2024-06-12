<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre_add'];
$genero = $_POST['genero_add'];
$descripcion = $_POST['descripcion_add'];
$link_pelicula = $_POST['link_add'];
$trailer = $_POST['trailer_add'];

$conexion = new Conexion(); // Crear una instancia de la clase Conexion

$sql = "UPDATE peliculas SET nombre='$nombre', genero='$genero', descripcion='$descripcion', link_pelicula='$link_pelicula', trailer='$trailer' WHERE id = '$id'";

$valid = $conexion->ejecutar($sql); // Llamar al método ejecutar() utilizando la instancia de la clase

if ($valid) {
    //echo "GOOD";
    header("location: ../view/administrador/administrar.php");
} else {
    //echo "BAD";
    header("location: ../view/administrador/administrar.php");
}

?>