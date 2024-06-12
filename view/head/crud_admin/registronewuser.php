<?php

session_start();
error_reporting(0);

$validar = $_SESSION['administrador'];

if ($validar == null || $validar = '') {
    header("Location: ../../home/login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

    <link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body id="page-top">

    <form action="./eliminar_editar/validar.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">

                            <br>
                            <br>
                            <h3 class="text-center">Registro de nuevo usuario</h3>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre *</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="correo" class="form-label">Correo *</label>
                                    <input type="email" id="correo" name="correo" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <br>

                                <div class="mb-3">
                                    <input type="submit" value="Guardar" class="btn btn-success" name="registrar">
                                    <a href="./user.php" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>