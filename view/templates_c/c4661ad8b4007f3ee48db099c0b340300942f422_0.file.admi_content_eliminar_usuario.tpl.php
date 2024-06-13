<?php
/* Smarty version 4.3.4, created on 2024-04-14 05:21:56
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_eliminar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661b4bd4a303e6_61770002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4661ad8b4007f3ee48db099c0b340300942f422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_eliminar_usuario.tpl',
      1 => 1713064883,
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
function content_661b4bd4a303e6_61770002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admi_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<form method="PUT" action="">
<h1>Eliminar usuario</h1>
<input id="nickname" type="text" placeholder="Nickname">
<br>
<button type="button" onclick="eliminar_usuario()">Enviar</button>
<input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
