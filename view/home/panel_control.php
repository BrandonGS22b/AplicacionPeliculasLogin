<!--:el código verifica si el usuario ha iniciado sesión correctamente utilizando la variable de sesión $_SESSION['usuario']. Si el usuario no ha iniciado sesión, se le redirige a la página de inicio de sesión. Si el usuario ha iniciado sesión correctamente, se le muestra un mensaje de bienvenida en la página. -->
<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    //Esta línea de código incluye (requiere) el contenido del archivo "header.php" en la ubicación especificada. El propósito de esto es incluir el encabezado de la página, que generalmente contiene la estructura HTML común utilizada en varias páginas del sitio.
    if(empty($_SESSION['administrador'])){
        header("Location:login.php");
        //Esta estructura de control condicional verifica si la variable de sesión 
        //Si la variable de sesión está vacía, significa que el usuario no ha iniciado sesión o no tiene una sesión activa. En ese caso, se redirige al usuario a la página de inicio de sesión ("login.php") utilizando la función header("Location:login.php"). 
        //Esto garantiza que solo los usuarios autenticados puedan acceder a la sección protegida del código.
    }
?>
    
    <!--:$_SESSION['usuario']. El nombre de usuario se muestra utilizando la sintaxis de impresión abreviada  $_SESSION['usuario'], que imprime el valor de la variable dentro del HTML.  -->
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
    //Esta línea de código incluye (requiere) el contenido del archivo "footer.php" en la ubicación especificada. El propósito de esto es incluir el pie de página común en la página.
?>