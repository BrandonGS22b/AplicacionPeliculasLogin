<?php

session_start();

if(isset($_SESSION['usuario'])){
    if ($_SESSION['usuario']['tipo_usuario'] == "admin"){
        header('Location: ../view/administrador/peliculas_session.php');

    }else if($_SESSION['usuario']['tipo_usuario'] == "user"){
        header('Location: ../view/usuario/peliculas_session.php');

    }
}

?>