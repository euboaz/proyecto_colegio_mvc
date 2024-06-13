<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'PUT':
        matricula_alumno_asignatura();
        break;
    default:
        ejecutar_default();
        break;
}

function consultar_asignatura()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $asignatura = $_REQUEST['asignatura'];
    $sql = "SELECT id_asignatura FROM `asignaturas` WHERE nombre_asignatura = '$asignatura';";
    $rs = $cn->ejecutarConsulta($sql);
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $a = $row["id_asignatura"];
        }
    }
    $cn->desconectar();
    return ($a);
}

function matricula_alumno_asignatura()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $id_asignatura = consultar_asignatura();
    $nickname = $_REQUEST['nickname'];
    $sql = "INSERT INTO `usuario_asignatura` (`nickname_usuario`, `id_asignatura`) VALUES ('$nickname', ' $id_asignatura');";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
