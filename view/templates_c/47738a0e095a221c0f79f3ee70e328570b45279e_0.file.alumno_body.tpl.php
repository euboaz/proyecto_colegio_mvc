<?php
/* Smarty version 4.3.4, created on 2024-04-14 05:12:13
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\alumno_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661b498d4b7c72_85747485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47738a0e095a221c0f79f3ee70e328570b45279e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\alumno_body.tpl',
      1 => 1712625951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661b498d4b7c72_85747485 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_alumno">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
            <!-- Botón cerrar sesión a la derecha -->
            <div class="d-flex justify-content-end">
                <form>
                    <input type="hidden" name="accion" value="menu_principal">
                    <button type="submit" class="btn btn-primary" onclick="cerrarSesion()">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </nav>
    <input id="nickname_usuario" type="hidden" name="nickname_usuario" value="<?php echo $_smarty_tpl->tpl_vars['nickname_usuario']->value;?>
">
    <div class="container-fluid">
        <div class="columna1">
            <div id="fila2">
                <form>
                    <input type="hidden" name="accion" value="consulta_horario">
                    <button type="submit" class="boton_main">Consultar Horario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="lista_alumnos_clase">
                    <button type="submit" class="boton_main">Alumnos del curso</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="lista_profesores">
                    <button type="submit" class="boton_main">Lista Profesores</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="consulta_notas">
                    <button type="submit" class="boton_main">Consultar Notas</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="consulta_asistencia">
                    <button type="submit" class="boton_main">Consultar Asistencia</button>
                </form>
            </div>
</div><?php }
}
