<?php
/* Smarty version 4.3.4, created on 2024-04-22 02:28:22
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_modificar_datos_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625af2658a076_31841729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21a1b762b0521044409dc234c3b0ec8d7fb2b13d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_modificar_datos_usuario.tpl',
      1 => 1713684577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admi_head.tpl' => 1,
    'file:admi_body.tpl' => 1,
    'file:admi_footer.tpl' => 1,
  ),
),false)) {
function content_6625af2658a076_31841729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admi_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <?php echo '<script'; ?>
>
        mostrar_usuarios();
    <?php echo '</script'; ?>
>
    <div id="contenidoHTML_nueve"></div>
    <form>
        <input type="text" id="nickname_usuario_modificar" placeholder="Nickname del usuario">
        <input type="text" id="nombre_usuario" placeholder="Nombre del usuario">
        <input type="text" id="apellidos_usuario" placeholder="Apellido del usuario">
        <select class="SingInValues" id="tipo_usuario_modificar">
            <option value="1">Estudiante</option>
            <option value="2">Profesor</option>
            <option value="3">Administrador</option>
        </select>
        <button type="button" onclick="modificar_usuarios(),location.reload();">Modificar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
