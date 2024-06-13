<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        listar_profesores();
        break;
    default:
        ejecutar_default();
        break;
}
function listar_profesores() {
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $sql = "SELECT usuarios.nombre_usuario, usuarios.apellidos_usuario, asignaturas.nombre_asignatura FROM usuario_asignatura JOIN asignaturas ON usuario_asignatura.id_asignatura = asignaturas.id_asignatura JOIN usuarios ON usuario_asignatura.nickname_usuario = usuarios.nickname_usuario WHERE usuarios.tipo_usuario = 2;";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Nombre</th>";
        $html .= "<th scope='col'>Apellidos</th>";
        $html .= "<th scope='col'>Asignatura</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>".$row["nombre_usuario"]."</td>";
            $html .= "<td>".$row["apellidos_usuario"]."</td>";
            $html .= "<td>".$row["nombre_asignatura"]."</td>";
            $dato["usuarios.nombre_usuario"] = $row["nombre_usuario"];
            $dato["usuarios.apellidos_usuario"] = $row["apellidos_usuario"];
            $dato["asignaturas.nombre_asignatura"] = $row["nombre_asignatura"];
            $filas[] = $dato;
            $html .= "</tr>";
        }        $html .= "</table>";
    }
    $cn->desconectar();
    echo ($html);
}

function ejecutar_default() {
    header("HTTP/1.1 405 Method not allowed");
}