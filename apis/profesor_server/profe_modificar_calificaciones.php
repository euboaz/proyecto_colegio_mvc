<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET': //Mostar las calificaciones existentes
        consultar_calificaciones();
        break;
    case 'MOD':
        modificar_notas();
    default:
        ejecutar_default();
        break;
}

function consultar_id_profesor()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario = $_REQUEST['nickname_usuario'];
    $sql = "SELECT id_usuario FROM `usuarios` WHERE nickname_usuario='$nickname_usuario';";
    $rs = $cn->ejecutarConsulta($sql);
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $a = $row["id_usuario"];
        }
    }
    $cn->desconectar();
    return ($a);
}

function consultar_id_asignatura()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario = $_REQUEST['nickname_usuario'];
    $sql = "SELECT asignaturas.id_asignatura FROM usuario_asignatura JOIN asignaturas ON asignaturas.id_asignatura = usuario_asignatura.id_asignatura WHERE usuario_asignatura.nickname_usuario = '$nickname_usuario';";
    $rs = $cn->ejecutarConsulta($sql);
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $a = $row["id_asignatura"];
        }
    }
    $cn->desconectar();
    return ($a);
}

function consultar_calificaciones()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $id_profesor = consultar_id_profesor();
    $sql = "SELECT usuarios.nickname_usuario,usuarios.nombre_usuario,usuarios.apellidos_usuario,calificaciones.calificacion FROM calificaciones JOIN usuarios ON calificaciones.nickname_usuario = usuarios.nickname_usuario WHERE calificaciones.id_profesor = $id_profesor;";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Nickname del alumno</th>";
        $html .= "<th scope='col'>Nombre del alumno</th>";
        $html .= "<th scope='col'>Apellidos del alumno</th>";
        $html .= "<th scope='col'>Calificacion del alumno</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>".$row["nickname_usuario"]."</td>";
            $html .= "<td>".$row["nombre_usuario"]."</td>";
            $html .= "<td>".$row["apellidos_usuario"]."</td>";
            $html .= "<td>".$row["calificacion"]."</td>";
            $dato["usuarios.nickname_usuario"] = $row["nickname_usuario"];
            $dato["usuarios.nombre_usuario"] = $row["nombre_usuario"];
            $dato["usuarios.apellidos_usuario"] = $row["apellidos_usuario"];
            $dato["calificaciones.calificacion"] = $row["calificacion"];
            $filas[] = $dato;
            $html .= "</tr>";
        }        $html .= "</table>";
    }
    $cn->desconectar();
    echo ($html);
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}

function modificar_notas() {
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $id_asignatura = consultar_id_asignatura();
    $id_profesor = consultar_id_profesor();
    $calificacion = $_REQUEST['nota_usuario'];
    $nickname_alumno = $_REQUEST['nickname_alumno'];
    $sql = "UPDATE `calificaciones` SET `calificacion` = '$calificacion' WHERE `calificaciones`.`nickname_usuario` = '$nickname_alumno' AND calificaciones.id_profesor = '$id_profesor' AND calificaciones.id_asignatura = '$id_asignatura';";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}