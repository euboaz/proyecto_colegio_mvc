<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        listar_materias();
        break;
    default:
        ejecutar_default();
        break;
}
function listar_materias() {
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $nickname_usuario = $_REQUEST['nickname_usuario'];
    $sql = "SELECT asignaturas.nombre_asignatura, asignaturas.horario FROM asignaturas JOIN usuario_asignatura ON usuario_asignatura.id_asignatura = asignaturas.id_asignatura JOIN usuarios ON usuarios.nickname_usuario = usuario_asignatura.nickname_usuario WHERE usuarios.nickname_usuario ='$nickname_usuario'";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();

    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Nombre de la asignatura</th>";
        $html .= "<th scope='col'>Horario</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>".$row["nombre_asignatura"]."</td>";
            $html .= "<td>".$row["horario"]."</td>";
            $dato["asignaturas.nombre_asignatura"] = $row["nombre_asignatura"];
            $dato["asignaturas.horario"] = $row["horario"];
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