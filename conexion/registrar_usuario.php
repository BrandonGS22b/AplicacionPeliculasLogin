<?php

//INCLUYENDO LA CONEXION
include 'conexion.php';

//RECIBIR DATOS Y ALMACENARLOS EN VARIABLES
$nombre = $_REQUEST["nom"];
$correo = $_REQUEST["correoo"];
$contrasena = $_REQUEST["contra"];
$tipo_usuario = "user";

//CONSULTA PARA INSERTAR REGISTROS DE USUARIOS
$sql = "INSERT INTO login (nombre, correo, contrasena, tipo_usuario) 
			VALUES ('".$nombre."', '".$correo."', '".$contrasena."', '".$tipo_usuario."')";

//CONFIRMANDO SI NO EXISTE OTRO CORREO IGUAL
$verificar = mysqli_query($mysqli, "SELECT * FROM login WHERE correo = '".$correo."'");
if (mysqli_num_rows($verificar) > 0) {
	echo '<script>
	alert("Este correo ya se encuentra registrado");
	window.history.go(-1);
	</script>';
	exit;
}

//EJECUTAR CONSULTA
$Valid = Conexion::ejecutar($sql);

if($Valid){
	//echo 'good';
echo "<script>alert('Ya puedes iniciar sesion');window.location= '../view/iniciar_sesion.php'</script>";

}else{
	//echo 'bad';
	header('Location: ../view/registrar.php');
}

?>