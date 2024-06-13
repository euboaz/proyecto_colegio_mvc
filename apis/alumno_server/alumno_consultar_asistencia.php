<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        listar_asistencia();
        break;
    default:
        ejecutar_default();
        break;
}
function listar_asistencia() {
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario = $_REQUEST['nickname_usuario'];
    $sql = "SELECT asignaturas.nombre_asignatura,asistencia.registro_asistencia,asistencia.fecha_registro FROM asistencia JOIN asignaturas ON asistencia.id_asignatura = asignaturas.id_asignatura WHERE asistencia.nickname_usuario = '$nickname_usuario';";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Nombre de la asignatura</th>";
        $html .= "<th scope='col'>Registro Asistencia</th>";
        $html .= "<th scope='col'>Fecha de registro</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>".$row["nombre_asignatura"]."</td>";
            $html .= "<td>".$row["registro_asistencia"]."</td>";
            $html .= "<td>".$row["fecha_registro"]."</td>";
            $dato["asignaturas.nombre_asignatura"] = $row["nombre_asignatura"];
            $dato["asistencia.registro_asistencia"] = $row["registro_asistencia"];
            $dato["asistencia.fecha_registro"] = $row["fecha_registro"];
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