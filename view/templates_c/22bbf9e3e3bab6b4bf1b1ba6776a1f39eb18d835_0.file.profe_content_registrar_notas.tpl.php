<?php
/* Smarty version 4.3.4, created on 2024-04-22 02:16:24
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_registrar_notas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625ac58e202f5_60478983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22bbf9e3e3bab6b4bf1b1ba6776a1f39eb18d835' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_registrar_notas.tpl',
      1 => 1713684480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profe_head.tpl' => 1,
    'file:profe_body.tpl' => 1,
    'file:profe_footer.tpl' => 1,
  ),
),false)) {
function content_6625ac58e202f5_60478983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:profe_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:profe_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<form method="PUT" action="">
    <input id="nickname" type="text" placeholder="Nickname del alumno">
    <br>
    <input id="calificacion" type="text" placeholder="Ingrese la calificacion">
    <br>
    <button type="button" onclick="registrar_calificaciones()">Agregar</button>
    <input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
