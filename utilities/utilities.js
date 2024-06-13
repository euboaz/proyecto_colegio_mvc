
function js_client_api_alumno_consultar_horario() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/alumno_server/alumno_consultar_horario_server.php?nickname_usuario=" + nickname_usuario,
        "method": "GET",
        "timeout": 0
    };
    $.ajax(settings).done(function (response) {
        $('#contenidoHTML').html(response);
    });
}

function agregar_usuario() {
    let nickname = document.getElementById("nickname").value;
    let pass = document.getElementById("pass").value;
    let nombre_usuario = document.getElementById("nombre_usuario").value;
    let apellidos_usuario = document.getElementById("apellidos_usuario").value;
    let tipo_usuario = document.getElementById("tipo_usuario").value;
    alert("Usuario registrado correctamente...");
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/admin_server/admin_agregar_usuario.php?nickname=" + nickname + "&pass=" + pass + "&nombre_usuario=" + nombre_usuario + "&apellidos_usuario=" + apellidos_usuario + "&tipo_usuario=" + tipo_usuario,
        "method": "PUT",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
}

function eliminar_usuario() {
    let nickname = document.getElementById("nickname").value;
    alert("Usuario eliminado correctamente...");
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/admin_server/admin_agregar_usuario.php?nickname=" + nickname,
        "method": "DEL",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
}

function agregar_asignatura() {
    let nombre_asignatura = document.getElementById("nombre_asignatura").value;
    let horario = document.getElementById("horario").value;
    alert("Asignatura registrada correctamente");
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/admin_server/admin_asignaturas.php?nombre_asignatura=" + nombre_asignatura + "&horario=" + horario,
        "method": "PUT",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
}


function eliminar_asignatura() {
    let nombre_asignatura = document.getElementById("nombre_asignatura").value;
    alert("Asignatura eliminada correctamente...");
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/admin_server/admin_asignaturas.php?nombre_asignatura=" + nombre_asignatura,
        "method": "DEL",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
}

function listar_profesores() {
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/alumno_server/alumno_consultar_profesores.php",
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_tres').html(response);
    });
}

function consulta_asignaturas() {
    let asignatura = document.getElementById("asignatura").value;
    console.log(asignatura);
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/alumno_server/alumno_consultar_alumnos_curso.php?asignatura=" + asignatura,
        "method": "PUT",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_dos').html(response);
    });

}

function alumno_consultar_notas() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/alumno_server/alumno_consultar_notas.php?nickname_usuario=" + nickname_usuario,
        "method": "GET",
        "timeout": 0
    };
    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_cuatro').html(response);
    });
}

function listar_asistencia() {

    let nickname_usuario = document.getElementById('nickname_usuario').value;
    var settings = {
        "url": "http://localhost/PROYECTO_FINAL_PROGRA_MVC/apis/alumno_server/alumno_consultar_asistencia.php?nickname_usuario=" + nickname_usuario,
        "method": "GET",
        "timeout": 0
    };
    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_cinco').html(response);
    });
}


function listar_asistencia_profesor() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/profesor_server/profe_consultar_asistencia.php?nickname_usuario=" + nickname_usuario,
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_siete').html(response);
    });
}


function matricula_alumno_asignatura() {
    let nickname = document.getElementById("nickname").value;
    let asignatura = document.getElementById("asignatura").value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/admin_server/admin_matricula_alumno.php?asignatura=" + asignatura + "&nickname=" + nickname,
        "method": "PUT",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
    alert("Matricula registrada correctamente...");
}

function registrar_calificaciones() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    let nickname = document.getElementById("nickname").value;
    let calificacion = document.getElementById("calificacion").value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/profesor_server/profe_registrar_calificaciones.php?nickname_usuario=" + nickname_usuario + "&nickname=" + nickname + "&calificacion=" + calificacion,
        "method": "PUT",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
    alert("Calificación registrada correctamente...");
}

function registrar_asistencia() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    let nickname = document.getElementById("nickname").value;
    let registro_asistencia = document.getElementById("registro_asistencia").value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/profesor_server/profe_registrar_asistencia.php?nickname_usuario=" + nickname_usuario + "&nickname=" + nickname + "&registro_asistencia=" + registro_asistencia,
        "method": "PUT",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
    alert("Asistencia registrada correctamente...");
}

function modificar_calificaciones() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/profesor_server/profe_modificar_calificaciones.php?nickname_usuario=" + nickname_usuario,
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_ocho').html(response);
    });
}

function modificar_calificaciones_dos() {
    let nickname_usuario = document.getElementById('nickname_usuario').value;
    let nickname_alumno = document.getElementById('nickname_alumno').value;
    let nota_usuario = document.getElementById('nota_usuario').value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/profesor_server/profe_modificar_calificaciones.php?nickname_usuario=" + nickname_usuario + "&nickname_alumno=" + nickname_alumno + "&nota_usuario=" + nota_usuario,
        "method": "MOD",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) { });
    alert("Modificado correctamente...");
}

function modificar_asistencia() {
    let indice_asistencia = document.getElementById('indice_asistencia').value;
    let registro_asistencia = document.getElementById('registro_asistencia').value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/profesor_server/profe_modificar_asistencia.php?indice_asistencia=" + indice_asistencia + "&registro_asistencia=" + registro_asistencia,
        "method": "MOD",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) { });
    alert("Modificado correctamente...");
}

function mostrar_usuarios() {
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/admin_server/admin_modificar_usuario.php",
        "method": "GET",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_nueve').html(response);
    });
}

function modificar_usuarios() {
    let nickname_usuario_modificar = document.getElementById('nickname_usuario_modificar').value;
    let nombre_usuario = document.getElementById('nombre_usuario').value;
    let apellidos_usuario = document.getElementById('apellidos_usuario').value;
    let tipo_usuario_modificar = document.getElementById('tipo_usuario_modificar').value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/admin_server/admin_modificar_usuario.php?nickname_usuario_modificar=" + nickname_usuario_modificar + "&nombre_usuario=" + nombre_usuario + "&apellidos_usuario=" + apellidos_usuario + "&tipo_usuario_modificar=" + tipo_usuario_modificar,
        "method": "MOD",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
    alert("Modificado correctamente...");
}

function mostrar_usuarios() {
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/admin_server/admin_modificar_asignatura.php",
        "method": "GET",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) {
        $('#contenidoHTML_diez').html(response);
    });
}

function modificar_asignatura() {
    let indice_asignatura = document.getElementById('indice_asignatura').value;
    let nombre_asignatura = document.getElementById('nombre_asignatura').value;
    let horario_asignatura = document.getElementById('horario_asignatura').value;
    var settings = {
        "url": "http://localhost/Proyecto_Final_Progra_MVC/apis/admin_server/admin_modificar_asignatura.php?indice_asignatura=" + indice_asignatura + "&nombre_asignatura=" + nombre_asignatura + "&horario_asignatura=" + horario_asignatura,
        "method": "MOD",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) { });
    alert("Modificado correctamente...");
}