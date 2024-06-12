

<?php include("../conexion/conexion.php"); ?>
<?php $page = 'peliculas'; include("layout/header.php"); ?>




<br>

<div class="row container">
	<form class="col s12" action="../controller/buscar.php" method="post">
		<div class="row">
			<div class="input-field col s12 l12 center">
				<a href="peliculas.php"><img src="../img/logo/cs.png" alt=""></a>
			</div>
			<div class="input-field col s12 l12 white">
				<i class="material-icons prefix">search</i>
				<input id="icon_prefix" class="validate" type="search" name="buscar" placeholder="buscar..." required="">
			</div>
		<center><button class="btn waves-effect orange darken-4 center" type="submit">Buscar</button></center>
		</div>
	</form>
</div>

<br>

<?php include("../model/model_peliculas.php"); ?>

<div class="row" style="padding: 0px; margin: auto; text-align: center;">

<?php foreach($datos as $items){ ?>

<figure class="imghvr-shutter-in-out-vert" style="margin: 5px;">
  <img class="responsive-img" src="../img/peliculas/<?=$items['imagen']?>" style="height: 310px; width: 220px;" alt="example-image">
  <figcaption style="background: rgba(0,0,0,0);">
    <h6 class="ih-fade-down ih-delay-sm"><?= $items['nombre']?></h6>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">
      <i><?= substr($items['descripcion'],0,150)." ..."?></i>
    </p>
  </figcaption>
  <a href="ver_pelicula.php?pelicula=<?=$items['id']?>"></a>
</figure>

<?php }?>

</div>

<?php include("layout/footer.php"); ?>