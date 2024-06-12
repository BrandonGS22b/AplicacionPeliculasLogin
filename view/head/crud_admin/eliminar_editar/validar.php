<?php

$conexion= mysqli_connect("localhost", "root", "", "login");

if (isset($_POST['registrar'])) {
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1) {
      $nombre = trim($_POST['nombre']);
      $correo = trim($_POST['correo']);
      $password = trim($_POST['password']);

      $consulta = "INSERT INTO administradores (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";
      mysqli_query($conexion, $consulta);
      mysqli_close($conexion);

      header('Location: ../user.php');
  }
}
?>