<?php
require_once("c://xampp/htdocs/login/view/head/head.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['usuario']) && empty($_SESSION['administrador'])) {
    // El usuario no ha iniciado sesión como usuario o administrador
} else {
    header("Location: login.php");
    exit();
}



?>


<style>

.fondo-login {
        background-image: url("../head/iconos/fondo/fondo.jpg");
        
        background-size: cover;
        background-position: center;
        
        /* Otros estilos de la sección fondo */
    }
    .login {
        background-image: url("../head/iconos/fondo/tenor.gif");
        background-size: cover;
        background-position: center;
        border: 2px solid #00e8ff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px #00e8ff;
    }
    


    .fondo {
        background-image: url("../head/img/logo.jpg");
        background-size: cover;
        background-position: center;
        /* Otros estilos de la sección fondo */
    }




.tecno-icon {
    width: 70px;
    height: 70px;
    border: 0px solid red;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.btn:active {
    background-color: #003c80;
}

.titulo {
        font-family: Arial, sans-serif;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 20px;
        color: #ffffff;
        text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #00e8ff, 0 0 70px #00e8ff, 0 0 80px #00e8ff, 0 0 100px #00e8ff, 0 0 150px #00e8ff;
    }
/*
en color rosado el titulo
.titulo {
        font-family: Arial, sans-serif;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 20px;
        color: #ffffff;
        text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #ff00e8, 0 0 70px #ff00e8, 0 0 80px #ff00e8, 0 0 100px #ff00e8, 0 0 150px #ff00e8;
    }
    */

</style>

<script>
    function mostrarContraseña(inputId, iconId) {
        var input = document.getElementById(inputId);
        var icon = document.getElementById(iconId);

        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>

<div class="fondo-login">
    <div class="icon">
            <img src="logo.jpg" alt="Tecno Icon" class="tecno-icon">
    </div>
    <div class="titulo">
        Inicia sesión en Tecno
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>


        <?php if (!empty($_GET['error'])) : ?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
           <!--: Esta línea de código crea un contenedor <div> para mostrar la alerta de error. El atributo id="alertError" se utiliza para seleccionar este elemento mediante JavaScript o CSS. El estilo -->
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
                <!--:= !empty($_GET['error']) ? $_GET['error'] : "" ?>: Esta línea de código imprime el valor del parámetro "error" dentro del contenedor de la alerta de error.  -->
            </div>
        <?php endif; ?>

            <!--:   -->
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="usuario" checked> <!--:name="optionsRadios" indica que estos radio buttons forman parte de un grupo y comparten el mismo nombre, lo que significa que solo se puede seleccionar una opción del grupo. El atributo   -->
                 <!--: checked establece esta opción como la opción predeterminada seleccionada. -->
                Usuario
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="administrador">  <!--: value="administrador" especifica el valor de la opción de selección de radio cuando se selecciona. La palabra reservada  -->
                Administrador
            </label>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

    <div class="login col-3 mt-3">
        Nuevo en la página? <a href="signup.php" style="text-decoration: none;">Crear una cuenta</a>
        Recupera tu contraseña? <a href="./recuperar.php">Olvidé mi contraseña</a> <br>
    </div>
</div>

