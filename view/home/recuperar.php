<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location: panel_control.php");
    }
?>

<style>
.dog-icon {
    width: 50px;
    height: 50px;
    border: 0px solid red;
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

    .login {
        background-image: url("../head/iconos/fondo/tenor.gif");
        background-size: cover;
        background-position: center;
        border: 2px solid #00e8ff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px #00e8ff;
    }

</style>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <img src="logo.jpg" alt="Dog Icon" class="dog-icon">
        </a>
    </div>
    <div class="titulo">
        INGRESA EL CORREO 
    </div>

    <form action="up.php" method="POST" class="col-3 login">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <?php
          
            
            
        ?>

    <?php if (!empty($_GET['error'])): ?>
    <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
        <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
        </div>
    <?php endif; ?>



        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">COME ON BRO</button>
        </div>
    </form>

    <div class="login col-3 mt-3">
        ¿Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia sesión</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
