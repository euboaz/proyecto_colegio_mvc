<?php
/* Smarty version 4.3.4, created on 2024-04-14 05:56:32
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_eliminar_asignatura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661b53f0c59490_65329266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a578449e7209ace155d6a13975aeb7ecc2280a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_eliminar_asignatura.tpl',
      1 => 1713066951,
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
function content_661b53f0c59490_65329266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admi_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<form method="DEL" action="">
<h1>Eliminar asignatura</h1>
<input id="nombre_asignatura" type="text" placeholder="Nombre asignatura">
<br>
<button type="button" onclick="eliminar_asignatura()">Eliminar</button>
<input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
