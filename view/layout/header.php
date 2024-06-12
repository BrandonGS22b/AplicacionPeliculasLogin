<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cine Soto</title>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/imagehover.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="icon" href="../img/logo/icon.png" type="image/png" />
</head>
<body>

<div>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../img/inicio/andromeda.jpg">
      </div>
      <a href="#user"><img class="circle" src="../img/inicio/desconocido.jpg"></a>
      <a href="#name"><span class="white-text name">Desconocido</span></a>
      <a href="#email"><span class="white-text email">Bienvenido a Ducally Tecno</span></a>
    </div></li>
    <li><a href="../index.php"><i class="fas fa-home"></i> Inicio</a></li>
    <li class="<?php if($page=='peliculas'){echo 'activo';} ?>"><a href="peliculas.php"><i class="fas fa-video"></i> Películas</a></li>
    <!--<li class="<?php if($page=='contacto'){echo 'activo';} ?>"><a href="contacto.php"><i class="far fa-address-card"></i> Contacto</a></li>-->
    <li><div class="divider"></div></li>
    <li><a class="subheader">Opciones</a></li>
    <li class="<?php if($page=='iniciar_sesion'){echo 'activo';} ?>"><a class="waves-effect" href="iniciar_sesion.php">Iniciar sesión</a></li>
    <li class="<?php if($page=='registrate'){echo 'activo';} ?>"><a class="waves-effect" href="registrate.php">Registrarse</a></li>
  </ul>
  <a id="menu" href="#" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
</div>
