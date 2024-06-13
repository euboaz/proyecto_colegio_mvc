<?php

session_start();
require_once 'libs/smarty_4_3_4/configuracion.php';
require_once 'model/model.php';

class control
{

    private $view;
    private $model;

    public function __construct() //Metodo contructor en el cual se hace llamado a la configuracion y modelo
    {
        $this->view = new configuracion();
        $this->model = new model();
    }

    public function gestion_procesos() //Metodo principal que ejecuta la logica del negocio
    {
        if (isset($_REQUEST['accion'])) {
            //Funcion isset devuelve un boolean si el campo indicado ya existe en memoria
            if (isset($_SESSION['nickname_usuario'])) {
                $this->view->setAssign("nickname_usuario", $_SESSION['nickname_usuario']);
            }
            $accion = $_REQUEST['accion'];
            switch ($accion) {

                //FUNCIONES DEL MENU PRINCIPAL

                case 'validar_login':
                    $this->c_validar_login();
                    break;
                case 'registrar_nuevo':
                    $this->c_registrar_login();
                    break;
                case 'localizacion':
                    $this->view->setDisplay('login_content_localizacion.tpl');
                    break;
                case 'caracteristicas':
                    $this->view->setDisplay('login_content_caracteristicas.tpl');
                    break;
                case 'instalaciones':
                    $this->view->setDisplay('login_content_instalaciones.tpl');
                    break;
                case 'servicios':
                    $this->view->setDisplay('login_content_servicios.tpl');
                    break;
                case 'informacion':
                    $this->view->setDisplay('login_content_informacion.tpl');
                    break;
                case 'proyectos':
                    $this->view->setDisplay('login_content_proyectos.tpl');
                    break;
                case 'registro':
                    $this->view->setDisplay('login_content_registro.tpl');
                    break;

                case 'menu_principal':
                    $this->view->setDisplay('login_content_main.tpl');
                    break;



                //FUNCIONES DEL MENU USUARIO ALUMNO

                case 'menu_alumno':
                    $this->view->setDisplay('alumno_content_main.tpl');
                    break;
                case 'consulta_horario':
                    $this->view->setDisplay('alumno_content_consulta_horario.tpl');
                    break;
                case 'lista_alumnos_clase':
                    $this->view->setDisplay('alumno_content_lista_alumnos_clase.tpl');
                    break;
                case 'lista_profesores':
                    $this->view->setDisplay('alumno_content_lista_profesores.tpl');
                    break;
                case 'consulta_notas':
                    $this->view->setDisplay('alumno_content_consulta_notas.tpl');
                    break;
                case 'consulta_asistencia':
                    $this->view->setDisplay('alumno_content_consulta_asistencia.tpl');
                    break;


                //FUNCIONES DEL MENU USUARIO ADMINISTRADOR

                case 'menu_administrador':
                    $this->view->setDisplay('admi_content_main.tpl');
                    break;
                case 'agregar_usuario':
                    $this->view->setDisplay('admi_content_agregar_usuario.tpl');
                    break;
                case 'eliminar_usuario':
                    $this->view->setDisplay('admi_content_eliminar_usuario.tpl');
                    break;
                case 'modificar_datos_usuario':
                    $this->view->setDisplay('admi_content_modificar_datos_usuario.tpl');
                    break;
                case 'agregar_asignatura':
                    $this->view->setDisplay('admi_content_agregar_asignatura.tpl');
                    break;
                case 'eliminar_asignatura':
                    $this->view->setDisplay('admi_content_eliminar_asignatura.tpl');
                    break;
                case 'modificar_datos_asignatura':
                    $this->view->setDisplay('admi_content_modificar_datos_asignatura.tpl');
                    break;
                case 'matricula_alumno_asignatura':
                    $this->view->setDisplay('admi_content_matricula_alumno_asignatura.tpl');
                    break;


                //FUNCIONES DEL MENU USUARIO PROFESOR

                case 'menu_profesor':
                    $this->view->setDisplay('profe_content_main.tpl');
                    break;
                case 'lista_alumnos':
                    $this->view->setDisplay('profe_content_lista_alumnos.tpl');
                    break;
                case 'lista_profesores_dos':
                    $this->view->setDisplay('profe_content_lista_profesores_dos.tpl');
                    break;
                case 'lista_asistencia':
                    $this->view->setDisplay('profe_content_lista_asistencia.tpl');
                    break;
                case 'registrar_notas':
                    $this->view->setDisplay('profe_content_registrar_notas.tpl');
                    break;
                case 'registrar_asistencia':
                    $this->view->setDisplay('profe_content_registrar_asistencia.tpl');
                    break;
                case 'modificar_notas':
                    $this->view->setDisplay('profe_content_modificar_notas.tpl');
                    break;
                case 'modificar_asistencia':
                    $this->view->setDisplay('profe_content_modificar_asistencia.tpl');
                    break;
            }
        } else {
            $this->view->setDisplay('login_content_main.tpl');
        }
    }

    public function c_validar_login()
    {
        $nickname_usuario = $_REQUEST['nickname_usuario'];
        $pass_usuario = $_REQUEST['pass_usuario'];
        $tipo_usuario = $_REQUEST['tipo_usuario'];
        $rs = $this->model->varLogin($nickname_usuario, $pass_usuario, $tipo_usuario);
        if (empty($rs)) {
            echo 'Datos Incorrectos, vuelva a iniciar sesión';
        } else {
            $_SESSION['nickname_usuario'] = $nickname_usuario;
            switch (end($rs)) {
                case '1':
                    $this->view->setDisplay('alumno_content_main.tpl');
                    break;
                case '2':
                    $this->view->setDisplay('profe_content_main.tpl');
                    break;
                case '3':
                    $this->view->setDisplay('admi_content_main.tpl');
                    break;
            }
        }
    }

    public function c_registrar_login()
    {
        $tipo_usuario = $_REQUEST['tipo_usuario'];
        $nickname_usuario = $_REQUEST['nickname_usuario'];
        $pass_usuario = $_REQUEST['pass_usuario'];
        $nombre_usuario = $_REQUEST['nombre_usuario'];
        $apellidos_usuario = $_REQUEST['apellidos_usuario'];
        $rs = $this->model->regLogin($tipo_usuario, $nickname_usuario, $pass_usuario, $nombre_usuario, $apellidos_usuario);
        print_r($rs);
    }
}

