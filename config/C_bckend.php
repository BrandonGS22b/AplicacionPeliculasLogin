<?php
$conexion = mysqli_connect("localhost"/*usando servidor local*/, "root"/*usuario de la base de datos*/, ""/*contraseña*/,"login"/*el nombre de la base de datos*/);

if($conexion){/*si hay conexion en la base de datos...*/
    $mensaje = "Conectado exitosamente a la base de datos";
}else{
    $mensaje = "No se ha podido conectar con la base de datos";
}

/*localhost/IS30C3OJMC/php/C_bckend.php*/ 
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
  background-color: #808080;/*Cuadro gris*/
}
</style>