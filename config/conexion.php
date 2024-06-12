<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "login";

$mensaje = ""; // Asignar un valor predeterminado a la variable $mensaje

$conexion = mysqli_connect($host, $user, $password, $database);
if (!$conexion) {
    $mensaje = "No se realizó la conexión a la base de datos, el error fue: " . mysqli_connect_error();
}

?>

<span id="msg"><?php echo $mensaje; ?></span>

<script>
    setTimeout(function() {
        document.getElementById("msg").style.display = "none";
    }, 3000); // 5000 milisegundos = 5 segundos
</script>

<style>
    #msg {
        display: flex;
        visibility: visible;
        flex: 1;
        border: 5px solid #808080; /* Establece el estilo y color del borde según tus preferencias */
        padding: 10px; /* Ajusta el valor del relleno según tus preferencias */
        background-color: #808080; /*Cuadro gris*/
    }
</style>