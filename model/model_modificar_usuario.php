<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre_user'];
$correo = $_POST['correo_user'];
$contrasena = $_POST['contrasena_user'];
$tipo_usuario = $_POST['tipo_usuario'];


$sql = "UPDATE login SET nombre='$nombre', correo='$correo', contrasena='$contrasena', tipo_usuario='$tipo_usuario' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../view/administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../view/administrador/administrar.php");
}

?>