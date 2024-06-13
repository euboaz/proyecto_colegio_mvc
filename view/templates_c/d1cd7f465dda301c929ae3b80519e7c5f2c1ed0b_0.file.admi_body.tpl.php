<?php
/* Smarty version 4.3.4, created on 2024-04-15 02:35:34
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c7656acfaf5_13748317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1cd7f465dda301c929ae3b80519e7c5f2c1ed0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_body.tpl',
      1 => 1713140910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661c7656acfaf5_13748317 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_administrador">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
            <!-- Bot�n cerrar sesi�n a la derecha -->
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
                    <input type="hidden" name="accion" value="agregar_usuario">
                    <button type="submit" class="boton_main">Agregar Usuario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="eliminar_usuario">
                    <button type="submit" class="boton_main">Eliminar usuario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="modificar_datos_usuario">
                    <button type="submit" class="boton_main">Modificar Datos Usuario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="agregar_asignatura">
                    <button type="submit" class="boton_main">Agregar Asignatura</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="eliminar_asignatura">
                    <button type="submit" class="boton_main">Eliminar Asignatura</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="modificar_datos_asignatura">
                    <button type="submit" class="boton_main">Modificar Datos Asignatura</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="matricula_alumno_asignatura">
                    <button type="submit" class="boton_main">Matricular alumno a una asignatura</button>
                </form>


            </div>
</div><?php }
}
