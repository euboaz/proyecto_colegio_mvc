<?php
/* Smarty version 4.3.4, created on 2024-04-15 04:54:40
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\alumno_content_consulta_asistencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c96f0e340a8_92324086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d136274bf20e915d98cdf292d38b041798642cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\alumno_content_consulta_asistencia.tpl',
      1 => 1713119190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alumno_head.tpl' => 1,
    'file:alumno_body.tpl' => 1,
    'file:alumno_footer.tpl' => 1,
  ),
),false)) {
function content_661c96f0e340a8_92324086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:alumno_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:alumno_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<div id="contenidoHTML_cinco"></div>
<?php echo '<script'; ?>
>
    listar_asistencia();
<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:alumno_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
