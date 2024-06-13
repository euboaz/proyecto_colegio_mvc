<?php
require_once '../../conn/conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'GET':
        consultar_asignaturas();
        break;
    case 'MOD':
        modificar_asignaturas();
        break;
    default:
        ejecutar_default();
        break;
}

function consultar_asignaturas()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $sql = "SELECT asignaturas.id_asignatura, asignaturas.nombre_asignatura, asignaturas.horario FROM `asignaturas`";
    $rs = $cn->ejecutarConsulta($sql);
    $filas = array();
    $dato = array();
    if ($rs->num_rows > 0) {
        $html = "<table class='table table-striped'>";
        $html .= "<tr>";
        $html .= "<th scope='col'>Indice de asignatura</th>";
        $html .= "<th scope='col'>Nombre de asignatura</th>";
        $html .= "<th scope='col'>Horario de asignatura</th>";
        $html .= "</tr>";
        while ($row = $rs->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["id_asignatura"] . "</td>";
            $html .= "<td>" . $row["nombre_asignatura"] . "</td>";
            $html .= "<td>" . $row["horario"] . "</td>";
            $dato["asignaturas.id_asignatura"] = $row["id_asignatura"];
            $dato["asignaturas.nombre_asignatura"] = $row["nombre_asignatura"];
            $dato["asignaturas.horario"] = $row["horario"];
            $filas[] = $dato;
            $html .= "</tr>";
        }
        $html .= "</table>";
    }
    $cn->desconectar();
    echo ($html);
}

function modificar_asignaturas()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $indice_asignatura = $_REQUEST['indice_asignatura'];
    $nombre_asignatura = $_REQUEST['nombre_asignatura'];
    $horario_asignatura = $_REQUEST['horario_asignatura'];
    $sql = "UPDATE `asignaturas` SET `nombre_asignatura` = '$nombre_asignatura', `horario` = '$horario_asignatura' WHERE `asignaturas`.`id_asignatura` = $indice_asignatura;";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}


function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}

