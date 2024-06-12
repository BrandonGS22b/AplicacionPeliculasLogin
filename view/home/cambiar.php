<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        //Esta es una estructura de control condicional en PHP. Verifica si la variable de sesión $_SESSION['usuario'] no está vacía.
        header("Location:panel_control.php");
        
    }
?>


<style>
.dog-icon {
    width: 50px;
    height: 50px;
    border: 0px solid red;
    /*preguntele al profe porque no pudo agregar el estilo por medio de la linea 24  */
  }

  .fondo-login {
  background-image: url(../head/iconos/fondo/fondo.jpg);
  background-color: rgba(0, 0, 0, 0.658);
  background-blend-mode: soft-light;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}


</style>

<div class="fondo-login">

    <div class="icon">
        <a href="/login/index.php">
            <img src="logo.jpg" alt="Dog Icon" class="dog-icon">
        </a>
    </div>
    <div class="titulo">
        INGRESA SU NUEVA CONTRASEÑA
    </div>


    <form action="up2.php" method="POST" class="col-3 login" >
        
         <!--: Esta línea de código define un formulario HTML. El atributo action especifica el archivo al que se enviarán los datos del formulario cuando se envíe. El atributo method especifica el 
         método HTTP utilizado para enviar los datos del formulario, en este caso, "POST". La clase CSS "col-3 login" se utiliza para aplicar estilos al formulario. El atributo autocomplete se establece en "off" para evitar que el navegador autocomplete los campos del formulario. -->
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!--: class="form-control": Especifica una clase CSS para el campo de entrada.   suele utilizarse en frameworks como Bootstrap para aplicar estilos predefinidos.  -->
             <!--: id="exampleInputEmail1 Define un identificador único para el campo de entrada. Puede ser utilizado por la etiqueta <label> para asociarse a este campo mediante el atributo for  -->
             <!--: aria-describedby="emailHelp": Especifica el id de un elemento adicional que proporciona ayuda o información adicional sobre el campo de entrada. Esto se utiliza para mejorar la accesibilidad. -->
             
        </div>
       
       
         <div class="mb-3">
             <!--: contienen los campos del formulario. Cada campo tiene una etiqueta <label> que describe el campo y un <input> que permite al usuario ingresar datos. Los atributos name se utilizan para identificar los campos cuando se envían los datos del formulario. -->
            <label for="exampleInputpassword" class="form-label">CONTRASEÑA NUEVA</label>
            <input type="password" name="pass1" class="form-control" id="exampleInputEmail1" aria-describedby="passwordHelp">
        </div>


        <!--:la siguiente linea de codigo nor sirve para detectar el error en el up2.php me detecte la condicion if o else el siguiente codigo me va llamar el error por si llega  a pasar-->
        <?php if (!empty($_GET['exito'])): ?> 
        <div id="alertExito" style="margin: auto;" class="alert alert-success mb-2" role="alert">
        <!--: Esta línea de código crea un contenedor <div> para mostrar la alerta de éxito. El atributo -->
        <!--: alert alert-success aplica el estilo de una alerta verde de éxito. El atributo  -->
        <!--:  El atributo role="alert" describe el propósito del elemento para la accesibilidad.  -->
         <!--: = $_GET['exito'] ?> : Esta línea de código imprime el valor del parámetro "exito" dentro del contenedor de la alerta de éxito.   -->
         <?= $_GET['exito'] ?>
        </div>
        <?php endif; ?>
       


        
        <?php if (!empty($_GET['error'])): ?><!-- Esta línea de código verifica si el parámetro "error" está presente en la URL y si no está vacío.-->
          
        <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
        <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
            <!--:  !empty($_GET['error']) ? $_GET['error'] : "" ?>: Esta línea de código imprime el valor del parámetro "error" dentro del contenedor de la alerta de error.  -->
        </div>
         <?php endif; ?>



        <div class="d-grid gap-2">
            <!--: contiene un botón de envío del formulario con la clase "btn btn-primary". Cuando se hace clic en el botón, se enviarán los datos del formulario. -->


        
            <button type="submit" class="btn btn-primary">COME ON BRO</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
    Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesion</a>
     
            
    </div>
</div>


<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>