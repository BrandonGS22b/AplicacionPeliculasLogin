<?php include("../conexion/conexion.php"); ?>
<?php include("layout/header.php"); ?>

<?php 

if (isset($_GET['pelicula'])) {
   	
   	include("../model/model_pelicula_consulta.php");

foreach($datos as $items){ ?>

	    <div id="imagen_bg" class="parallax-container">
	    	<div class="texto center">
	    		<h3 class="white-text truncate"><?=$items['nombre']?></h3>
	    		<br>
	    		<p class="white-text"><?= "Publicado el: " .$items['fecha']?></p>
    			<p class="white-text"><?= "<b>Género: </b>" .$items['genero']; ?></p>
          		<h5 class="white-text">Trailer</h5>
      			<iframe width="350" height="230" src="https://www.youtube.com/embed/<?= $items['trailer']?>" frameborder="0" allowfullscreen></iframe>
    			<br>
	    	</div>
	    	<div class="parallax"><img src="../img/imagen_bg/<?=$items['imagen_bg']?>" alt=""></div>
	    </div>
	    
        <div class="row" style="padding: 10px;">
        <div class="col s12 l8">
        <h4 class="white-text">Sipnosis</h4>
		<p class="white-text"><?= $items['descripcion']; ?></p>
      	<br>
      	<div class="video-container">
      	<iframe width="853" height="480" src="https://www.youtube.com/embed/<?= $items['link_pelicula'] ?>" frameborder="0" allowfullscreen></iframe>
      	</div>
      	<br>
      	<h5 class="white-text">Comentarios</h5>
		<hr>

    <br>
    <a class="blue-text center" href="iniciar_sesion.php">Inicia Sesion para agregar comentarios :)</a>

    <?php
      if (isset($_GET['pelicula'])) {

      include("../model/model_agregar_comentario.php");

      echo "<div class='grey lighten-5'>";
      
      foreach($datos as $items2){ ?>
    
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="../img/inicio/desconocido.jpg" alt="" class="circle">
          <span class="title blue-text"><?=$items2['nombre'];?> - <i class="black-text" style="font-size: 13px;">Publicado el: <?=$items2['fecha'];?></i></span>
          <p>- <?=$items2['comentario'];?></p>
        </li>
      </ul>
     
      <?php } echo "</div>"; } else{echo "<h2 class='white-text'>No hay comentarios</h2>";}?>
        
  <br>
  </div>
  <br>
        <div class="col s12 l4 center">
        	<br>
        	<img width="250" class="responsive-img" src="../img/peliculas/<?=$items['imagen']?>" alt="">
		</div>
</div>

<?php } }else{ ?>
	<br>
  <h1 class="white-text">No hay nada</h1>
<?php } ?>

<script type="text/javascript">
//parallax
$(document).ready(function(){
    $('.parallax').parallax();
  });
</script>

<?php include("layout/footer.php"); ?>