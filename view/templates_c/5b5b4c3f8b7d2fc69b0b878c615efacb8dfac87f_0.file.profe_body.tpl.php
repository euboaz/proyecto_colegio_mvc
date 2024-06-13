<?php
/* Smarty version 4.3.4, created on 2024-04-14 22:29:46
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c3cba159db5_14420533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b5b4c3f8b7d2fc69b0b878c615efacb8dfac87f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_body.tpl',
      1 => 1713126549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661c3cba159db5_14420533 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_profesor">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
            <!-- Bot�n cerrar sesi�n a la derecha -->
            <div class="d-flex justify-content-end">
                <form>
                    <input type="hidden" name="accion" value="menu_principal">
                    <button type="submit" class="btn btn-primary" onclick="cerrarSesion()">Cerrar Sesion</button>
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
                    <input type="hidden" name="accion" value="lista_alumnos">
                    <button type="submit" class="boton_main">Lista Alumnos</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="lista_profesores_dos">
                    <button type="submit" class="boton_main">Lista profesores</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="lista_asistencia">
                    <button type="submit" class="boton_main">Lista Asistencia</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="registrar_notas">
                    <button type="submit" class="boton_main">Registrar notas</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="registrar_asistencia">
                    <button type="submit" class="boton_main">Registrar Asistencia</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="modificar_notas">
                    <button type="submit" class="boton_main">Modificar notas</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="modificar_asistencia">
                    <button type="submit" class="boton_main">Modificar Asistencia</button>
                </form>
                <form>


            </div>
</div><?php }
}
