<?php
include("../../controller/usuario_session.php");
include("../../conexion/conexion.php");
include("../layout/header_sesion2.php"); 




// Verificar si el usuario administrador no ha iniciado sesión
if (empty($_SESSION['usuario'])) {
    header("Location: ../home/login.php"); // Redirigir a la página de inicio de sesión
    exit();
}

include_once("../layout/header_sesion2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecno Ducally</title>
    

    <style>
         body {
            background-image: url("../head/iconos/fondo/fondo.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }


        

.carrucel {
  width: 100%;
  height: 50vh;
  display: flex;
  overflow: hidden;
}

.carrucelhijo img {
  width: 100%;
  height: 60vh;
  object-fit: cover;
}


.card{
  animation-name: my-animation;
  animation-duration: 40s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
  animation-timing-function: ease;
  position: relative;

}








@keyframes my-animation { 
  0%{right: 0%;}
  20%{right: 40%;}
  40%{right: 70%}
  60%{right: 110%;}
  80%{right: 160%;} 
  100%{right: 0%;}
}







.cardinfo {
  font-size: xx-large;
  color: white;
  text-shadow: 0 0 8px black;
  text-align: center;
  padding: 20px;
  width: 100%;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.card {
  position: relative;
}

.cardinfo {
  position: absolute;
  bottom: 0;
}

    </style>

    
    
</head>
<body>

<br>

<div class="row container">
	<form class="col s12" action="../../controller/buscar.php" method="post">
		<div class="row">
            <div class="input-field col s12 l12 center">
        <a href="peliculas_session.php"><img src="../../img/logo/ba.png" alt=""></a>
            </div>
			<div class="input-field col s12 l12 white">
				<i class="material-icons prefix">search</i>
				<input id="icon_prefix" class="validate" type="search" name="buscar" placeholder="buscar..." required="">
			</div>
		<center><button class="btn waves-effect orange darken-4 center" type="submit">Buscar</button></center>
		</div>
	</form>
</div>
<!-- Esto es un comentario en HTML -->
<div class="carrucel">
            <div class="card" id="img1">
                <a href="reproductoresP/Doctor-Strange-en-Multiverso-de-la-Locura.html">
                    <div class="carrucelhijo">
                        <img src="../head/img/carrusel/pdrstren.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Doctor Strange en el Multiverso de la Locura</h3>
                    </div>
                </a>
            </div>


            <div class="card" id="img2">

                <a href="reproductoresP/spiderman-un-nuevo-universo.html">
                    <div class="carrucelhijo">
                        <img src="../head/img/carrusel/pspiderman.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Spider-Man: un nuevo universo</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img3">

                <a href="reproductoresP/sonic2.html">
                    <div class="carrucelhijo">
                        <img src="../head/img/carrusel/psonic2.jpg">
                    </div>
                    <div class="cardinfo">
                        <h3>Sonic 2</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img4">

                <a href="reproductoresP/joker.html">
                    <div class="carrucelhijo">
                        <img src="../head/img/carrusel/pjoker.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Joker</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img5">

                <a href="reproductoresP/vengadores-infinity-war.html">
                    <div class="carrucelhijo">
                        <img src="../head/img/carrusel/pspiderman.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>vengadores infinity war</h3>
                    </div>
                </a>
            </div>

        </div>





<!-- Esto es un comentario en HTML -->
<br>

<?php include("../../model/model_peliculas.php"); ?>

<div class="row" style="padding: 0px; margin: auto; text-align: center;">

<?php foreach($datos as $items){ ?>

<figure class="imghvr-shutter-in-out-vert" style="margin: 5px;">
  <img class="responsive-img" src="../../img/peliculas/<?=$items['imagen']?>" style="height: 310px; width: 220px;" alt="example-image">
  <figcaption style="background: rgba(0,0,0,0);">
    <h6 class="ih-fade-down ih-delay-sm"><?= $items['nombre']?></h6>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">
      <i><?= substr($items['descripcion'],0,150)." ..."?></i>
    </p>
  </figcaption>
  <a href="ver_pelicula_session.php?pelicula=<?=$items['id']?>"></a>
</figure>

<?php }?>

</div>

<?php include("../layout/footer_sesion.php"); ?>