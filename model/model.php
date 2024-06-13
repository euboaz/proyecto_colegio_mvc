<?php

require_once 'conn/conexion.php';

class model
{
    private $cn;

    public function __construct()
    {
        $this->cn = new conexion();
    }

    public function varLogin($usuario, $pass, $tipo)
    {
        $this->cn->conectar();
        $sql = "SELECT id_usuario,nickname_usuario,pass_usuario,nombre_usuario,apellidos_usuario,tipo_usuario FROM usuarios WHERE nickname_usuario = '$usuario' AND pass_usuario ='$pass'AND tipo_usuario ='$tipo'";
        $rs = $this->cn->ejecutarConsulta($sql);
        $datos = array();
        if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                $datos["id_usuario"] = $row["id_usuario"];
                $datos["nickname_usuario"] = $row["nickname_usuario"];
                $datos["nombre_usuario"] = $row["nombre_usuario"];
                $datos["apellidos_usuario"] = $row["apellidos_usuario"];
                $datos["tipo_usuario"] = $row["tipo_usuario"];
            }
        }
        $this->cn->desconectar();
        return $datos;
    }

    public function regLogin($tipo_usuario,$nickname_usuario, $pass_usuario,$nombre_usuario, $apellidos_usuario)
    {
        $this->cn->conectar();
        $sql = "INSERT INTO usuarios (tipo_usuario,nickname_usuario,pass_usuario,nombre_usuario,apellidos_usuario) VALUES ('$tipo_usuario','$nickname_usuario','$pass_usuario','$nombre_usuario','$apellidos_usuario')";
        $rs = $this->cn->ejecutarConsulta($sql);
        $this->cn->desconectar();
    }
}
