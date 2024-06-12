<?php
session_start();

include("../conexion/conexion.php");

$pelicula_id = @$_POST['pelicula_id'];
$comentario = @$_POST['comentario'];

// Verificar si la clave 'usuario' está definida en $_SESSION
if (isset($_SESSION['usuario'])) {
    $correo = $_SESSION['usuario'];

    // Obtener el nombre desde la base de datos
    $conn = new mysqli("localhost", "root", "", "login");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT nombre FROM usuarios WHERE correo = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("s", $correo);
    $statement->execute();
    $resultado = $statement->get_result();
    $nombre = $resultado->fetch_assoc()['nombre'] ?? '';

    $fecha = date("Y-m-d");

    if ($nombre) {
        if (isset($_SESSION['administradores']) && $_SESSION['administradores'] == true) {
            $sql = "SELECT correo FROM administradores WHERE correo = ?";
            $statement = $conn->prepare($sql);
            $statement->bind_param("s", $correo);
            $statement->execute();
            $resultado = $statement->get_result();
            $admin = $resultado->fetch_assoc();

            if ($admin) {
                $Location = "Location: ../view/administrador/ver_pelicula_session.php?pelicula={$pelicula_id}";

                if ($comentario) {
                    $sql = "INSERT INTO comentarios (pelicula_id, comentario, fecha, nombre, correo) VALUES (?, ?, ?, ?, ?)";
                    $statement = $conn->prepare($sql);
                    $statement->bind_param("issss", $pelicula_id, $comentario, $fecha, $nombre, $correo);

                    if ($statement->execute()) {
                        header($Location);
                        exit();
                    } else {
                        header($Location);
                        exit();
                    }
                } else {
                    header($Location);
                    exit();
                }
            } else {
                // El usuario no es un administrador, manejar el error aquí
                echo "Error: No tienes permisos de administrador.";
            }
        } else {
            $Location = "Location: ../view/usuario/ver_pelicula_session.php?pelicula={$pelicula_id}";

            if ($comentario) {
                $sql = "INSERT INTO comentarios (pelicula_id, comentario, fecha, nombre, correo) VALUES (?, ?, ?, ?, ?)";
                $statement = $conn->prepare($sql);
                $statement->bind_param("issss", $pelicula_id, $comentario, $fecha, $nombre, $correo);

                if ($statement->execute()) {
                    header($Location);
                    exit();
                } else {
                    header($Location);
                    exit();
                }
            } else {
                header($Location);
                exit();
            }
        }
    } else {
        // El nombre no está disponible en la base de datos, manejar el error aquí
        echo "Error: No se pudo obtener el nombre del usuario.";
    }

    $conn->close();
} else {
    // La clave 'usuario' no está definida en $_SESSION, manejar el error aquí
    echo "Error: La sesión de usuario no está activa.";
}
?>