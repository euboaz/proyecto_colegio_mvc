<?php
/* Smarty version 4.3.4, created on 2024-04-22 03:10:05
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\login_content_registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625b8eda6b975_63293032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2636bfb28f68a7bb30352342e5f8caaa635fd19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\login_content_registro.tpl',
      1 => 1713748087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login_head.tpl' => 1,
    'file:login_body.tpl' => 1,
    'file:login_footer.tpl' => 1,
  ),
),false)) {
function content_6625b8eda6b975_63293032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:login_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <form>
        <h1 id="SingInTxt">Registrarse</h1>
        <select class="SingInValues" name="tipo_usuario">
            <option value="" selected disabled>Seleccione el tipo de usuario</option>
            <option value="1">Alumno</option>
            <option value="2">Profesor</option>
        </select>
        <input class="SingInValues" type="text" placeholder="Usuario" name="nickname_usuario">
        <input class="SingInValues" type="password" placeholder="Contraseña" name="pass_usuario">
        <input class="SingInValues" type="text" placeholder="Nombre" name="nombre_usuario">
        <input class="SingInValues" type="text" placeholder="Apellidos" name="apellidos_usuario">
        <input type="hidden" name="accion" value="registrar_nuevo">
        <button type="submit" class="SingInbtnRegistrarse">Crear Usuario</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:login_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
