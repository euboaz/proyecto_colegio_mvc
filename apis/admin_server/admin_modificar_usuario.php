<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        consultar_usuarios();
        break;
    case 'MOD':
        modificar_usuarios();
        break;
    default:
        ejecutar_default();
        break;
}

function consultar_usuarios()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $sql = "SELECT usuarios.nickname_usuario,usuarios.nombre_usuario,usuarios.nombre_usuario,usuarios.apellidos_usuario,usuarios.tipo_usuario FROM `usuarios`;";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Nickname del usuario</th>";
        $html .= "<th scope='col'>Nombre del usuario</th>";
        $html .= "<th scope='col'>Apellidos del usuario</th>";
        $html .= "<th scope='col'>Tipo del usuario</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["nickname_usuario"] . "</td>";
            $html .= "<td>" . $row["nombre_usuario"] . "</td>";
            $html .= "<td>" . $row["apellidos_usuario"] . "</td>";
            $html .= "<td>" . $row["tipo_usuario"] . "</td>";
            $dato["usuarios.nickname_usuario"] = $row["nickname_usuario"];
            $dato["usuarios.nombre_usuario"] = $row["nombre_usuario"];
            $dato["usuarios.apellidos_usuario"] = $row["apellidos_usuario"];
            $dato["usuarios.tipo_usuario"] = $row["tipo_usuario"];
            $filas[] = $dato;
            $html .= "</tr>";
        }
        $html .= "</table>";
    }
    $cn->desconectar();
    echo ($html);
}

function modificar_usuarios()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario_modificar = $_REQUEST['nickname_usuario_modificar'];
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $apellidos_usuario = $_REQUEST['apellidos_usuario'];
    $tipo_usuario_modificar = $_REQUEST['tipo_usuario_modificar'];
    $sql = "UPDATE `usuarios` SET `nombre_usuario` = '$nombre_usuario', `apellidos_usuario` = '$apellidos_usuario', `tipo_usuario` = '$tipo_usuario_modificar' WHERE `usuarios`.`nickname_usuario` = '$nickname_usuario_modificar';";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}


function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}

