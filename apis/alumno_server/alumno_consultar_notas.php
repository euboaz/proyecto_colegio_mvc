<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        listar_notas();
        break;
    default:
        ejecutar_default();
        break;
}
function listar_notas() {
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario = $_REQUEST['nickname_usuario'];
    $sql = "SELECT asignaturas.nombre_asignatura,calificaciones.calificacion FROM calificaciones JOIN asignaturas ON calificaciones.id_asignatura = asignaturas.id_asignatura WHERE calificaciones.nickname_usuario = '$nickname_usuario';";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Nombre de la asignatura</th>";
        $html .= "<th scope='col'>Calificacion</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>".$row["nombre_asignatura"]."</td>";
            $html .= "<td>".$row["calificacion"]."</td>";
            $dato["asignaturas.nombre_asignatura"] = $row["nombre_asignatura"];
            $dato["calificaciones.calificacion"] = $row["calificacion"];
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