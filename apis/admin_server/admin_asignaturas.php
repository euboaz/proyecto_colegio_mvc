<?php

require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'PUT':
        agregar_asignatura();
        break;
    case 'DEL':
        eliminar_asignatura();
        break;
    default:
        ejecutar_default();
        break;
}
function agregar_asignatura()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nombre_asignatura = $_REQUEST['nombre_asignatura'];
    $horario = $_REQUEST['horario'];
    $sql = "INSERT INTO `asignaturas`(`nombre_asignatura`, `horario`) VALUES ('$nombre_asignatura','$horario')";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function eliminar_asignatura()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nombre_asignatura = $_REQUEST['nombre_asignatura'];
    $sql = "DELETE FROM asignaturas WHERE `asignaturas`.`nombre_asignatura` = '$nombre_asignatura'";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
