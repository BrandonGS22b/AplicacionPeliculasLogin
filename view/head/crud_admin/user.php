<?php
$conexion = mysqli_connect("localhost", "root", "", "login");




$SQL = "SELECT id, correo, password, 'Administrador' AS rol, nombre FROM administradores
        UNION
        SELECT id, correo, password, 'Usuario' AS rol, nombre FROM usuarios";
$dato = mysqli_query($conexion, $SQL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/es.css">
</head>

<body>
    <div class="container is-fluid">
        <div class="col-xs-12">
            <h1>Bienvenido administrador</h1>
            <br>
            <h1>Lista de usuarios</h1>
            <br>
            <div>
                <a class="btn btn-success" href="../crud_admin/registronewuser.php">Nuevo usuario
                    <i class="fa fa-plus"></i>
                </a>
                <a class="btn btn-warning" href="../../home/logout.php">Log Out
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                </a>
                <a class="btn btn-primary" href="pdf/user.php">Imprimir PDF
                    <i class="fa fa-file-pdf"></i>
                </a>
                <a class="btn btn-primary" href="excel/user.php">Imprimir Excel
                    <i class="fa fa-file-excel"></i>
                </a>
            </div>
            <br>

            <table class="table table-striped table-dark" id="table_id">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($dato->num_rows > 0) {
                        while ($fila = mysqli_fetch_array($dato)) {
                    ?>
                            <tr>
                                <td><?php echo $fila['id']; ?></td>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td><?php echo $fila['correo']; ?></td>
                                <td><?php echo $fila['password']; ?></td>
                                <td><?php echo $fila['rol']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="./eliminar_editar/editar_user.php?id=<?php echo $fila['id']; ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="./eliminar_editar/eliminar_user.php?id=<?php echo $fila['id']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr class="text-center">
                            <td colspan="4">No existen registros</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/user.js"></script>
</body>

</html>