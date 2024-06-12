<?php
include("administrador_session.php");

if (isset($_POST['buscar'])) {
    $buscar = $_POST['buscar'];
    if (isset($_SESSION['administrador'])) {
        header("Location: ../view/administrador/peliculas_session.php?buscar={$buscar}");
    } else {
        header("Location: ../view/usuario/peliculas_session.php?buscar={$buscar}");
    }
    exit();
} else {
    header("Location: ../usuario/peliculas_session.php");
    exit();
}
?>