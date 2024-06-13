<?php

require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'PUT':
        agregar_usuario();
        break;
    case 'DEL':
        eliminar_usuario();
        break;
    default:
        ejecutar_default();
        break;
}
function agregar_usuario()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname = $_REQUEST['nickname'];
    $pass = $_REQUEST['pass'];
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $apellidos_usuario = $_REQUEST['apellidos_usuario'];
    $tipo_usuario = $_REQUEST['tipo_usuario'];
    $sql = "INSERT INTO `usuarios`(`nickname_usuario`, `pass_usuario`, `nombre_usuario`, `apellidos_usuario`, `tipo_usuario`) VALUES ('$nickname','$pass','$nombre_usuario','$apellidos_usuario','$tipo_usuario')";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function eliminar_usuario()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname = $_REQUEST['nickname'];
    $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`nickname_usuario` = '$nickname'";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}

function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
