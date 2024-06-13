<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'PUT':
        registrar_calificaciones();
        break;
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

function registrar_calificaciones()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $id_profesor = consultar_id_profesor();
    $id_asignatura = consultar_id_asignatura();
    $nickname = $_REQUEST['nickname'];
    $calificacion = $_REQUEST['calificacion'];
    $sql = "INSERT INTO `calificaciones` (`nickname_usuario`, `id_profesor`, `id_asignatura`, `calificacion`) VALUES ('$nickname', '$id_profesor', '$id_asignatura', '$calificacion');";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
