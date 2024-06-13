<?php
/* Smarty version 4.3.4, created on 2024-04-14 05:37:10
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_agregar_asignatura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661b4f66d3a545_25542919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659bdc6018289bab6c1c237fe4796244da6a02df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_agregar_asignatura.tpl',
      1 => 1713065782,
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
function content_661b4f66d3a545_25542919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admi_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<form method="PUT" action="">
<h1>Agregar asignatura</h1>
<input id="nombre_asignatura" type="text" placeholder="Nombre asignatura">
<br>
<select id="horario">
    <option value="Lunes">Lunes</option>
    <option value="Martes">Martes</option>
    <option value="Miercoles">Miercoles</option>
    <option value="Jueves">Jueves</option>
    <option value="Viernes">Viernes</option>
    <option value="Sabado">Sabado</option>
</select>
<br>
<button type="button" onclick="agregar_asignatura()">Agregar</button>
<input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
