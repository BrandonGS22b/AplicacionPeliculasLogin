


<?php
    include "conexion.php";//Esta línea incluye el archivo "conexion.php",wey esto sirve para esteblecer conxcion con la bd 
    
    // Obtener las variables del formulario
    $correo = $_POST['correo'];//Esta línea obtiene el valor del campo de entrada de correo electrónico del formulario enviado a esta página utilizando el método POST
    $password = $_POST['pass'];//mire en el formulario login donde creo el html del login

    // Consulta preparada para evitar inyección SQL
    $query = "SELECT * FROM usuarios WHERE correo = ? AND confirmado = 'si'";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $correo);//Se vincula el valor del correo electrónico a la consulta preparada. El especificador de tipo "s" indica que el valor es una cadena.
    $stmt->execute();//Se ejecuta la consulta preparada.
    $res = $stmt->get_result();//Se obtiene el resultado de la ejecución de la consulta preparada.

    if ($res->num_rows > 0) {// Verificar la contraseña utilizando una función de hashing (por ejemplo, password_verify)
        $usuario = $res->fetch_assoc();//Se obtiene la fila de resultados como un arreglo asociativo y se asigna a la variable $usuario.
        $hashed_password = $usuario['password'];//se crea la variable hashed-pasword la que llamara la contraseña almacenada

        if (password_verify($password, $hashed_password)) { //Se utiliza la función password_verify() para verificar si la contraseña proporcionada coincide con la contraseña almacenada en la base de datos
            echo "Inicio de sesión exitoso";
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Inicio de sesión incorrecto";
        //Si la consulta no devuelve ninguna fila de resultados, se muestra en pantalla el mensaje "Inicio de sesión incorrecto", lo que significa que no se encontró un usuario con el correo
        // electrónico proporcionado o que el usuario no está confirmado.
    }
?>
<?php
require_once("c://xampp/htdocs/login/view/head/footer.php");
?>