<?php

require_once("../conexion/conexion.php");

$id_comentario = $_GET["id"];

$id_comentario = (int)$id_comentario;

$sql = "DELETE FROM comentarios WHERE id=". $id_comentario;

$valid = Conexion::ejecutar($sql);

header("location: ../view/administrador/administrar.php");

?>