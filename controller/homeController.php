<?php
//homeController tiene métodos para guardar un nuevo usuario en la base de datos,
// realizar operaciones de limpieza y encriptación de datos, y verificar si un usuario y una contraseña coinciden en la base de datos. Es probable

//homeController tiene métodos para guardar un nuevo usuario en la base de datos,
// realizar operaciones de limpieza y encriptación de datos, y verificar si un usuario y una contraseña coinciden en la base de datos. Es probable


class homeController {
    private $MODEL;

    public function __construct() {
        require_once("c://xampp/htdocs/login/model/homeModel.php");
        $this->MODEL = new homeModel();
    }

    public function guardarUsuario($correo, $contraseña, $nombre) {
        $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarCorreo($correo), $this->limpiarCadena($contraseña), $this->limpiarCadena($nombre));
        return $valor;
    }

    public function limpiarCadena($campo) {
        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);
        return $campo;
    }

    public function limpiarCorreo($campo) {
        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
        $campo = htmlspecialchars($campo);
        return $campo;
    }

    public function verificarUsuario($correo, $contraseña) {
        $keydb = $this->MODEL->obtenerClave($correo);
        $query = "SELECT * FROM usuarios WHERE correo = :correo AND contraseña = :contraseña";
        return ($contraseña === $keydb) ? true : false;
    }

    public function verificarAdministrador($correo, $contraseña) {
        $keydb = $this->MODEL->obtenerClaveadm($correo);
        $query = "SELECT * FROM administradores WHERE correo = :correo AND contraseña = :contraseña";
        return ($contraseña === $keydb) ? true : false;
    }
}
?>

