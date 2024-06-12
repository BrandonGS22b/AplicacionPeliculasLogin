<?php
session_start();
error_reporting(0);

$validar = $_SESSION['administrador'];

if ($validar == null || $validar == '') {
    header("Location: ../../home/login.php");
    die();
}

$conexion = mysqli_connect("localhost", "root", "", "login");

if (isset($_GET['correo'])) {
    $correo = $_GET['correo'];
    $consulta = "SELECT * FROM administradores WHERE correo = '$correo'";
    $resultado = mysqli_query($conexion, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);
} else {
    // Manejo del caso en que no se proporciona 'correo' en la URL
    // Puedes redirigir a otra página o mostrar un mensaje de error
    // header("Location: otra_pagina.php");
    // echo "Correo no proporcionado";
}

$id = $_GET['id'];
$conexion = mysqli_connect("localhost", "root", "", "login");
$consulta = "SELECT * FROM administradores WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">
    <form action="_functions.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password']; ?>" required>
                            </div>
                            <input type="hidden" name="accion" value="editar_registro">
                            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                            <br>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Editar</button>
                                <a href="../user.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>