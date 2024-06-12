<?php
include("../conexion/conexion.php");

$nombre_add = @$_POST['nombre_add'];
$genero_add = @$_POST['genero_add'];
$descripcion_add = @$_POST['descripcion_add'];
$link_add = @$_POST['link_add'];
$trailer_add = @$_POST['trailer_add'];
$imagen = @$_FILES['imagen']['name'];
$fileImage = @$_FILES['imagen']['tmp_name'];
$imagen_bg = @$_FILES['imagen_bg']['name'];
$fileImage_bg = @$_FILES['imagen_bg']['tmp_name'];
$fecha = date("Y-m-d");

$ruta = "../img/peliculas";
$ruta = $ruta . "/" . $imagen;
move_uploaded_file($fileImage, $ruta);

$ruta2 = "../img/imagen_bg";
$ruta2 = $ruta2 . "/" . $imagen_bg;
move_uploaded_file($fileImage_bg, $ruta2);

$conexion = new Conexion(); // Crear una instancia de la clase Conexion

$sql = "INSERT INTO peliculas (nombre, genero, descripcion, fecha, trailer, link_pelicula, imagen, imagen_bg) VALUES
		 ('" . $nombre_add . "','" . $genero_add . "','" . $descripcion_add . "','" . $fecha . "','" . $trailer_add . "','" . $link_add . "','" . $imagen . "','" . $imagen_bg . "')";

$valid = $conexion->ejecutar($sql); // Llamar al método ejecutar() utilizando la instancia de la clase

if ($valid) {
	// echo "good";
	header("Location: ../view/administrador/add_pelicula.php?m=true");
} else {
	// echo "bad";
	header("Location: ../view/administrador/add_pelicula.php?m=false");
}
?>