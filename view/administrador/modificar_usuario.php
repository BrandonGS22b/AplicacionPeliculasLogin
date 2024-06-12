<?php

require_once("../../conexion/conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM login WHERE id =" .$id;

$datos = Conexion::consultar($sql);

foreach ($datos as $items) {
}

?>

<?php
include("../../controller/administrador_session.php");
include("../../model/model_administrar.php");
include("../layout/header_sesion.php");
?>

<br>
<div class="container">
	<h2 class="white-text center">Modificar Usuarios</h2>
	<br>
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../model/model_modificar_usuario.php?id=<?=$items['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombre_user" name="nombre_user" type="text" class="validate" value="<?php echo $items['nombre']; ?>" required="">
          <label for="nombre_user">Nombre:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">contact_mail</i>
          <input id="correo_user" name="correo_user" type="text" class="validate" value="<?php echo $items['correo'];?>" required="">
          <label for="correo_user">Correo:</label>
        </div>
		<div class="input-field col s12 l12">
          <i class="material-icons prefix">fingerprint</i>
          <input id="contrasena_user" name="contrasena_user" type="text" class="validate" value="<?php echo $items['contrasena'];?>" required=""></input>
          <label for="contrasena_user">Contraseña:</label>
        </div>
          <div class="input-field col s12">
            <select name="tipo_usuario">
              <option value="user" selected>Usuario</option>
              <option value="admin">Administrador</option>
            </select>
            <label>Tipo de Usuario</label>
          </div>
      </div>
      <br>
       	<center><button class="btn waves-effect waves-light green darken-1 btn-large" type="submit" name="action">Actualizar
    		<i class="material-icons right">send</i>
  		</button></center>
		<br><br>
    </form>
  </div>
</div>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>