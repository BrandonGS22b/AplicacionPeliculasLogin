<?php
require_once("c://xampp/htdocs/login/controller/homeController.php");
$obj = new homeController();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$confirmarContraseña = $_POST['confirmarContraseña'];

$error = "";

if (empty($nombre) || empty($correo) || empty($contraseña) || empty($confirmarContraseña)) {
    $error .= "<li>Completa todos los campos</li>";
    header("Location: signup.php?error=" . $error . "&correo=" . $correo . "&contraseña=" . $contraseña . "&confirmarContraseña=" . $confirmarContraseña);
} else if ($correo && $contraseña && $confirmarContraseña) {
    if ($contraseña == $confirmarContraseña) {
        if ($obj->guardarUsuario($correo, $contraseña, $nombre) === false) {
            $error .= "<li>El correo ya está registrado</li>";
            header("Location: signup.php?error=" . $error . "&correo=" . $correo . "&contraseña=" . $contraseña . "&confirmarContraseña=" . $confirmarContraseña);
        } else {
            header("Location: login.php");
        }
    } else {
        $error .= "<li>Las contraseñas no coinciden</li>";
        header("Location: signup.php?error=" . $error . "&correo=" . $correo . "&contraseña=" . $contraseña . "&confirmarContraseña=" . $confirmarContraseña);
    }
}
?>