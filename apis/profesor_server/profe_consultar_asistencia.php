<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        listar_asistencia_profesor();
        break;
    default:
        ejecutar_default();
        break;
}

function consultar_nickname()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario = $_REQUEST['nickname_usuario'];
    $sql = "SELECT id_usuario FROM `usuarios` WHERE nickname_usuario = '$nickname_usuario';";
    $rs = $cn->ejecutarConsulta($sql);
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $a = $row["id_usuario"];
        }
    }
    $cn->desconectar();
    return ($a);
}

function listar_asistencia_profesor()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $id_profesor = consultar_nickname();
    $sql = "SELECT asistencia.id_reg_asistencia_asignatura,usuarios.nombre_usuario,usuarios.apellidos_usuario,asistencia.registro_asistencia,asistencia.fecha_registro FROM asistencia JOIN usuarios ON asistencia.nickname_usuario = usuarios.nickname_usuario WHERE asistencia.id_profesor = $id_profesor;";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Indice de asistencia</th>";
        $html .= "<th scope='col'>Nombre alumno</th>";
        $html .= "<th scope='col'>Apellidos alumno</th>";
        $html .= "<th scope='col'>Registro asistencia</th>";
        $html .= "<th scope='col'>Fecha de registro</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["id_reg_asistencia_asignatura"] . "</td>";
            $html .= "<td>" . $row["nombre_usuario"] . "</td>";
            $html .= "<td>" . $row["apellidos_usuario"] . "</td>";
            $html .= "<td>" . $row["registro_asistencia"] . "</td>";
            $html .= "<td>" . $row["fecha_registro"] . "</td>";
            $dato["id_reg_asistencia_asignatura"] = $row["id_reg_asistencia_asignatura"];
            $dato["usuarios.nombre_usuario"] = $row["nombre_usuario"];
            $dato["usuarios.apellidos_usuario"] = $row["apellidos_usuario"];
            $dato["asistencia.registro_asistencia"] = $row["registro_asistencia"];
            $dato["asistencia.fecha_registro"] = $row["fecha_registro"];
            $filas[] = $dato;
            $html .= "</tr>";
        }
        $html .= "</table>";
    }
    $cn->desconectar();
    echo ($html);
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
