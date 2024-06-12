<?php 
    $conexion = new mysqli('localhost','root','','login');
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>