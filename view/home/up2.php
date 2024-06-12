<?php
class db{
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

$db = new db();
$conexion = $db->conexion();

function actualizarContrasena($correo, $nuevaContrasena) {
    global $conexion;
    
    // Verificar si el usuario existe en la base de datos
    $consulta = "SELECT id FROM usuarios WHERE correo=:correo";
    $query = $conexion->prepare($consulta);
    $query->bindParam(":correo", $correo);
    $query->execute();
    
    if ($query->rowCount() > 0) {
        // Actualizar la contraseña del usuario
        $sql = "UPDATE usuarios SET password=:nuevaContrasena WHERE correo=:correo";
        $query = $conexion->prepare($sql);
        $query->bindParam(":nuevaContrasena", $nuevaContrasena);
        $query->bindParam(":correo", $correo);
        
        if ($query->execute()) {
            // Contraseña actualizada exitosamente
            return true;
        } else {
            // Error al actualizar la contraseña
            return false;
        }
    } else {
        // El usuario no existe en la base de datos
        return false;
    }
}

// Verificar si los valores existen en $_POST
if (isset($_POST['correo']) && isset($_POST['pass1'])) {
    $correo = $_POST['correo'];
    $nuevaContrasena = $_POST['pass1'];

    if (actualizarContrasena($correo, $nuevaContrasena)) {
        // El correo está en la base de datos
        $mensajeExito = "¡Cambio de contraseña exitoso!";
        header("Location: cambiar.php?exito=" . urlencode($mensajeExito));
        exit;
    } else {
        // El correo no está en la base de datos
        $error = "No se encontró usuario/correo.";
        header("Location: recuperar.php?error=" . urlencode($error));
        exit;
    }
} else {
    // Los valores no existen en $_POST
    $error = "No se enviaron los datos necesarios.";
    header("Location: recuperar.php?error=" . urlencode($error));
    exit;
}
?>