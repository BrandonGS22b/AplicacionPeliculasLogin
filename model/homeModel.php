<?php
//esta clase homeModel se utiliza para realizar consultas a la base de datos relacionadas con usuarios, como agregar un nuevo usuario y obtener la contraseña correspondiente a un correo electrónico específico. 
//Utiliza la clase PDO para interactuar con la base de datos y realizar operaciones SQL seguras.
    class homeModel{
        private $PDO;
        //Esta línea declara una variable privada de instancia llamada $PDO. Esta variable se utiliza para almacenar una instancia de la clase PDO que representa la conexión a la base de datos.
        public function __construct()
        //Este es el constructor de la clase homeModel. Se ejecuta automáticamente cuando se crea un objeto de la clase. En este caso, se requiere el archivo "db.php" que probablemente contiene la configuración de la base de datos y se crea una instancia de la clase db. Luego, 
        //se establece la conexión a la base de datos asignando el resultado de llamar al método conexion() de la instancia de db a la variable $PDO.
        {
            require_once("c://xampp/htdocs/login/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function agregarNuevoUsuario($correo, $password, $nombre) {
            $statement = $this->PDO->prepare("INSERT INTO usuarios (nombre, correo, password) VALUES (:nombre, :correo, :password)");
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":correo", $correo);
            $statement->bindParam(":password", $password);
        
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function obtenerclave($correo){
            //Este método público obtenerclave() recibe un parámetro $correo. Prepara una consulta SQL para seleccionar la columna de contraseña (password) de la tabla 
            //usuarios donde el correo coincide con el valor proporcionado. Luego, vincula el parámetro :correo con el valor proporcionado. Ejecuta la consulta utilizando el 
            //método execute() y devuelve la contraseña obtenida mediante el método fetch(). Si la ejecución tiene éxito, devuelve la contraseña; de lo contrario, devuelve false.
            $statement = $this->PDO->prepare("SELECT password FROM usuarios WHERE correo = :correo");
       

            //esto significa que cuando la consulta se ejecute, el valor de $password se asignará al marcador de posición :password.


            $statement->bindParam(":correo",$correo);
            //La función bindParam() se utiliza para evitar inyecciones de SQL y permite la asignación segura de valores a los marcadores de posición en la consulta preparada.
            //Después de ejecutar estas líneas de código, el objeto $statement estará preparado para ejecutar la consulta con los valores proporcionados para $correo y $password.

            return ($statement->execute()) ? $statement->fetch()['password'] : false;
            //esta línea de código intenta ejecutar la consulta preparada y obtener el valor del campo "password" de la fila de resultados si la ejecución tiene éxito. 
            //Si la ejecución falla o se produce algún error, se devuelve false.
        }


        public function obtenerclaveadm($correo){
            //Este método público obtenerclave() recibe un parámetro $correo. Prepara una consulta SQL para seleccionar la columna de contraseña (password) de la tabla 
            //usuarios donde el correo coincide con el valor proporcionado. Luego, vincula el parámetro :correo con el valor proporcionado. Ejecuta la consulta utilizando el 
            //método execute() y devuelve la contraseña obtenida mediante el método fetch(). Si la ejecución tiene éxito, devuelve la contraseña; de lo contrario, devuelve false.
            $statement = $this->PDO->prepare("SELECT password FROM administradores WHERE correo = :correo");
       

            //esto significa que cuando la consulta se ejecute, el valor de $password se asignará al marcador de posición :password.


            $statement->bindParam(":correo",$correo);
            //La función bindParam() se utiliza para evitar inyecciones de SQL y permite la asignación segura de valores a los marcadores de posición en la consulta preparada.
            //Después de ejecutar estas líneas de código, el objeto $statement estará preparado para ejecutar la consulta con los valores proporcionados para $correo y $password.

            return ($statement->execute()) ? $statement->fetch()['password'] : false;
            //esta línea de código intenta ejecutar la consulta preparada y obtener el valor del campo "password" de la fila de resultados si la ejecución tiene éxito. 
            //Si la ejecución falla o se produce algún error, se devuelve false.
        }
    }

?>