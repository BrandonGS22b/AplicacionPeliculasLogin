<?php



require_once("c://xampp/htdocs/login/controller/homeController.php");
session_start();

$obj = new homeController();

$correo = $obj->limpiarCorreo($_POST['correo']);
$contraseña = $obj->limpiarCadena($_POST['contraseña']);
$tipoUsuario = $_POST['optionsRadios'];

if ($tipoUsuario === "usuario") {
    $bandera = $obj->verificarUsuario($correo, $contraseña);
} elseif ($tipoUsuario === "administrador") {
    $bandera = $obj->verificarAdministrador($correo, $contraseña);
} else {
    $bandera = false;
}

if ($bandera && $tipoUsuario === "usuario") {
    $_SESSION['usuario'] = $correo;
    header("Location: ../usuario/peliculas_session.php"); // Página del panel de usuario normal
} elseif ($bandera && $tipoUsuario === "administrador") {
    $_SESSION['administrador'] = $correo;
    header("Location: ../administrador/peliculas_session.php"); // Página del panel de administrador
} else {
    $error = "<li>Las claves son incorrectas</li>";
    header("Location: login.php?error=" . $error);
}




/*
//el código realiza el proceso de autenticación y control de inicio de sesión. Verifica las credenciales ingresadas por el usuario, almacena el correo electrónico en la variable de sesión si son válidas, 
//y redirige al usuario a la página de control si el inicio de sesión es exitoso. En caso de que las credenciales sean incorrectas, se redirige al usuario de vuelta a la página de inicio 
//de sesión con un mensaje de error.
    require_once("c://xampp/htdocs/login/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $correo = $obj->limpiarcorreo($_POST['correo']);
    $contraseña = $obj->limpiarcadena($_POST['contraseña']);
    $bandera = $obj->verificarusuario($correo,$contraseña);
    if($bandera){
        $_SESSION['usuario'] = $correo;
        header("Location:panel_control.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>
*/