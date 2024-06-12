<?php
require_once("config.php");

class Conexion {
    public static $obj = null;
    public $conn;
    
    public function __construct() {
        $this->conn = mysqli_connect("localhost","root","","login") or die("Error de conexion.");
    }
    
    public static function getConexion() {
        if (self::$obj == null) {
            self::$obj = new Conexion();
        }
        return self::$obj->conn;
    }
    
    public static function ejecutar($sql) {
        $cx = self::getConexion();
        $query = mysqli_query($cx, $sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function consultar($sql) {
        $cx = self::getConexion();
        $ResultSet = mysqli_query($cx, $sql);
        $resultado = array();
        while ($filas = mysqli_fetch_array($ResultSet)) {
            $resultado[] = $filas;
        }
        return $resultado;
    }
    
    public function __destruct() {
        mysqli_close($this->conn);
    }
}
?>