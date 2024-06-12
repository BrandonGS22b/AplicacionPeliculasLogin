<?php include("../controller/session.php"); ?>
<?php $page = 'iniciar_sesion'; include("layout/header_sesion2.php.php"); ?>

<div id="row" class="row">

	<div class="col l6 s4 imagen_iniciar_sesion"></div>
	<div class="row white">
    <form class="col l6 s8" action="post" id="inicio_de_sesion">
      <div class="container">
   	<h2 class="center">Iniciar Sesión :)</h2>
    <center><img src="../img/inicio/robot-cookies.gif" alt="" width="100px"></center>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input name="correo_iniciar_sesion" minlength="1" maxlength="100" id="icon_prefix" type="email" class="validate" required>
          <label for="icon_prefix">Correo</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">enhanced_encryption</i>
          <input name="contrasena_iniciar_sesion" minlength="6" maxlength="25" id="contrasena_iniciar_sesion" type="password" class="validate" pattern="[A-Za-z0-9_-]{6,25}" title="Solo numeros y letras, desde la A-Z, a-z, _, - nada de caracteres especiales." required>
          <label for="contrasena_iniciar_sesion">Contraseña</label>
        </div>
      </div>
      <center>
      	    <div id="error" class="red white-text"></div>
      	  <br>
       <input class="boton_iniciar_sesion" id="azul" type="submit" name="action" value="INICIAR SESION 🗝️" />
  		</center>
      </div>
  		<br><br>
  		<center>
  			<div class="divider"></div>
      <h5>¿Aun no tienes una cuenta?</h5>
      </center>
      <br>
    <center>
    <a href="registrate.php" class="btn tooltipped waves-effect orange accent-3" data-position="bottom" data-tooltip="Registrate, es gratis!">Registrate</a>
    </center>
    </form>
  </div>
</div>

<?php include("layout/footer.php") ?>