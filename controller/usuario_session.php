<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuarios'])){
	if ($_SESSION['correo'] != "correo"){
		header('Location: ../usuario/peliculas_session.php');
	}
}else{
		//header('Location: ../view/home/login.php');
}

?>


