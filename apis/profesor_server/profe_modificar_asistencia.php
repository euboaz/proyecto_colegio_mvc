<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'MOD':
        modificar_asistencia();
    default:
        ejecutar_default();
        break;
}

function modificar_asistencia() {
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $indice_asistencia = $_REQUEST['indice_asistencia'];
    $registro_asistencia = $_REQUEST['registro_asistencia'];
    $sql = "UPDATE `asistencia` SET `registro_asistencia` = '$registro_asistencia' WHERE `asistencia`.`id_reg_asistencia_asignatura` = $indice_asistencia;";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
