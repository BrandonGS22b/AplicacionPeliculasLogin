<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tecno Ducally</title>
  <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	<link rel="stylesheet" href="../../css/imagehover.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="icon" href="../../img/logo/icon.png" type="image/png" />
</head>
<body>

<div>
  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="../../img/inicio/andromeda.jpg">
        </div>
        <a href="#user">
          <img class="circle" src="../../img/inicio/desconocido.jpg">
        </a>

        <?php
        // Iniciar la sesión (asegúrate de que esto esté al principio del archivo)


        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION['administrador'])) {
            // Obtener el usuario actual desde la sesión
            $usuarioActual = $_SESSION['administrador'];

            // Utilizar la información del usuario en el código HTML
            echo '<a href="#name"><span class="white-text name">' . $usuarioActual . '</span></a>';
        } else {
            // El usuario no ha iniciado sesión, realizar una acción alternativa
            echo "Usuario no identificado";
        }
        ?>
      </div>
    </li>
    <li><a href="peliculas_session.php"><i class="fas fa-video"></i> Películas</a></li>
    <!--<li><a href="../contacto.php"><i class="far fa-address-card"></i> Contacto</a></li>-->
    <li><div class="divider"></div></li>
    <li><a class="subheader">Opciones</a></li>
    <li><a class="waves-effect" href="../head/crud_admin/user.php">Live</a></li>
    <li><a class="waves-effect" href="../administrador/peliculas_descargar.php">descargar</a></li>
    <li><a class="waves-effect" href="../head/crud_admin/user.php">Administración</a></li>
    <li><a class="waves-effect" href="../head/crud_admin/user.php">Sobre nosotros</a></li>
    <li><a class="waves-effect" href="../../conexion/cerrar_sesion.php">Cerrar Sesion</a></li>
  </ul>
  <a id="menu" href="#" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
</div>


<script>
    $(document).ready(function(){
    $('.modal').modal();
  });
</script>
</body>
</html>
<!--<Este código primero verifica si el administrador ha iniciado sesión utilizando isset($_SESSION['administrador']). Si el administrador ha iniciado sesión, se obtiene su ID desde $_SESSION['administrador'] y se realiza una consulta para obtener su información. Luego, se muestra el correo del administrador en el código HTML. Si el administrador no ha iniciado sesión, se muestra un mensaje alternativo.

Asegúrate de tener un sistema de inicio de sesión implementado para administradores y que estés almacenando el ID del administrador en la sesión con la clave $_SESSION['administrador']. Ajusta este código según tu implementación específica del inicio de sesión de administradores.-->






