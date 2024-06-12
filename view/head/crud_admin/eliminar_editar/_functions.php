<?php
session_start();
error_reporting(0);

$validar = $_SESSION['administrador'];

if ($validar == null || $validar == '') {
    header("Location: ../../home/login.php");
    die();
}

$host = "localhost";
$user = "root";
$password = "";
$database = "login";

$conexion = mysqli_connect($host, $user, $password, $database);
if (!$conexion) {
    $mensaje = "No se realizó la conexión a la base de datos, el error fue: " . mysqli_connect_error();
} else {
    if (isset($_POST['accion'])) {
        switch ($_POST['accion']) {
            case 'eliminar_registro':
                eliminar_registro();
                break;

            case 'editar_registro':
                editar_registro();
                break;

            default:
                // Acción no válida
                break;
        }
    }
}

function eliminar_registro()
{
    global $conexion;
    $id = $_POST['id'];

    $consulta_administradores = "DELETE FROM administradores WHERE id = $id";
    mysqli_query($conexion, $consulta_administradores);

    $consulta_usuarios = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conexion, $consulta_usuarios);

    header('Location: ../user.php');
    exit();
}

function editar_registro()
{
    global $conexion;
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $consulta = "UPDATE administradores SET nombre = '$nombre', correo = '$correo', password = '$password' WHERE id = $id";
    mysqli_query($conexion, $consulta);

    if (mysqli_affected_rows($conexion) > 0) {
        header('Location: ../user.php');
        exit();
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>