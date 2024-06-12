<?php 
//el código cierra la sesión actual del usuario, destruye todos los datos de sesión y redirige al usuario a la página de inicio de sesión.
    session_start(); //Permite almacenar y acceder a datos de sesión en el servidor para el usuario actual.
    session_destroy();//Esta función destruye todos los datos registrados en una sesión y finaliza la sesión actual. Elimina todas las variables de sesión y libera los recursos asociados a la sesión. Después de llamar a esta función, los datos de sesión no estarán disponibles.
    header("Location:login.php");//Esta función se utiliza para redirigir al navegador a otra página. En este caso, redirige al navegador a la página "login.php". 
    

?>