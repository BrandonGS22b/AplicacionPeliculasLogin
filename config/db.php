<?php
    class db{
        private $host="localhost";
        private $dbname="login";
        private $user="root";
        private $password="";
        public function conexion(){
            //Esta línea define un método público llamado conexion() dentro de la clase db. Este método se utiliza para establecer la conexión a la base de datos.
            try {
                // Este bloque de código maneja cualquier excepción que pueda ocurrir al intentar establecer la conexión a la base de datos.
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                //Esta línea crea una nueva instancia de la clase PDO, que es una clase incorporada de PHP para interactuar con bases de datos.
                return $PDO;
                //Si la conexión se establece correctamente, se devuelve el objeto $PDO, que representa la conexión a la base de datos.
            } catch (PDOException $e) {
                return $e->getMessage();
                //Si ocurre una excepción al intentar establecer la conexión, se devuelve el mensaje de error generado por la excepción.
            }
        }
    }
?>