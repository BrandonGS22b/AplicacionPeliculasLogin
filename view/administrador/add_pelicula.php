<?php include("../../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesion.php"); ?>

<?php
include("../../controller/administrador_session.php");
include("../../conexion/conexion.php");
include("../../model/model_administrar.php");
?>

<br>
<div class="container">
  <h2 class="white-text center">Agregar Peliculas</h2>
  <br>
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../controller/guardar_pelicula.php" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_add" type="text" class="validate" required="">
          <label for="nombre_add">Titulo:</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">live_tv</i>
          <select id="genero_add" name="genero_add" required="">
            <option value="" disabled selected>Selecciona el género</option>
            <option value="Acción">Acción</option>
            <option value="Comedia">Comedia</option>
            <option value="Drama">Drama</option>
            <option value="Ciencia ficción">Ciencia ficción</option>
            <!-- Agrega más opciones de género aquí -->
          </select>
          <label for="genero_add">Genero:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <textarea id="descripcion_add" name="descripcion_add" class="materialize-textarea" required=""></textarea>
          <label for="descripcion_add">Descripcion:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">theaters</i>
          <textarea id="link_add" name="link_add" class="materialize-textarea" required=""></textarea>
          <label for="link_add">Link Pelicula:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">insert_link</i>
          <textarea id="trailer_add" name="trailer_add" class="materialize-textarea" required=""></textarea>
          <label for="trailer_add">Trailer:</label>
        </div>
        <div class="file-field col s12 l6 input-field">
          <div class="btn green darken-4">
            <span>Seleccionar Poster:</span>
            <input type="file" name="imagen" required="">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <div class="file-field col s12 l6 input-field">
          <div class="btn orange darken-4">
            <span>Seleccionar Portada:</span>
            <input type="file" name="imagen_bg" required="">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>
      <br>
      <center>
        <button class="btn waves-effect waves-light blue darken-4 btn-large" type="submit" name="action">Agregar
          <i class="material-icons right">send</i>
        </button>
      </center>
      <br><br>
    </form>
  </div>
</div>

<?php 
if(isset($_GET['m'])){
  if ($_GET['m'] == "true") {
    echo "<script>alert('Guardado Correctamente')</script>";
  }else{
    echo "<script>alert('Error al guardar, esto puede ser debido a alguna imagen.')</script>";
  }
}
?>

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
  <!-- redirige a la pagina login si no eh logueado -->
  <a href="<?=$items['link_pelicula']?>" download></a>
</figure>

<?php } ?>

</div>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>