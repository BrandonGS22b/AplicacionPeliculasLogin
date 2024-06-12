<?php

require_once("../conexion/conexion.php");

$id_usuario = $_GET["id"];

$id_usuario = (int)$id_usuario;

$sql = "DELETE FROM login WHERE id=". $id_usuario;

$valid = Conexion::ejecutar($sql);

header("location: ../view/administrador/administrar.php");

?>