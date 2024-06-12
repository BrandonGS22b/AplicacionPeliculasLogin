<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuarios'])) {
    if ($_SESSION['correo'] != "correo") {
        header('Location: ../usuario/peliculas_session.php');
        exit();
    }
} elseif (isset($_SESSION['administradores'])) {
    if ($_SESSION['correo'] != "correo") {
        header('Location: ../administrador/peliculas_session.php');
        exit();
    }
} else {
    //header('Location: ../view/home/login.php');
}
?>