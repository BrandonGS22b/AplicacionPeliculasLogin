<?php
class db{
    //Se definen variables privadas que almacenan la información de conexión, como el nombre de host, nombre de la base de datos, usuario y contraseña.
    private $host="localhost";
    private $dbname="login";
    private $user="root";
    private $password="";

    public function conexion(){
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

//db Si la conexión se establece correctamente, se devuelve el objeto PDO. En caso de error, se captura la excepción y se devuelve el mensaje de error.
$db = new db();

//Se crea una instancia de la clase "db" llamada "$db". Esto crea un objeto que se utilizará para acceder a los métodos y propiedades de la clase "db".
$conexion = $db->conexion();
//Se llama al método "conexion" del objeto "$db" para obtener la conexión a la base de datos. El resultado se almacena en la variable "$conexion".
$correo = $_POST['correo'];
//Se obtiene el valor del campo de formulario llamado "correo" utilizando la variable superglobal $_POST. Esto asume que el formulario que envía los datos al script contiene un campo con el nombre "correo".
$query = $conexion->prepare("SELECT * FROM usuarios WHERE correo=:correo ");
//Se prepara una consulta SQL utilizando el método "prepare" del objeto de conexión "$conexion". La consulta selecciona todas las columnas de la tabla "usuarios" donde el correo es igual al valor proporcionado. El uso de un parámetro llamado ":correo" en la consulta permite una consulta segura y evita posibles ataques de inyección de SQL. El valor de ":correo" se vincula al valor obtenido del formulario utilizando el método "bindParam".
$query->bindParam(":correo", $correo);

$validar_login = $query->fetchAll(PDO::FETCH_ASSOC);

if ($query->execute() && $query->rowCount() > 0) {
    // El correo está en la base de datos
    header("Location: cambiar.php");
    exit;
} else {
    // El correo no está en la base de datos
    $error = "No se encontró usuario/correo.";
    header("Location: recuperar.php?error=" . urlencode($error));//Se define un mensaje de error y se almacena en la variable "$error". Luego, se utiliza la función "header" para redirigir al usuario a la página "recuperar.php" y se pasa el mensaje de error codificado en la URL utilizando la función "urlencode". Finalmente, se llama a la función "exit" 
    exit;
}
?>