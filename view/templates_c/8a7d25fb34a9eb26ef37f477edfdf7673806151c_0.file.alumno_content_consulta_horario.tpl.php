<?php
/* Smarty version 4.3.4, created on 2024-04-14 05:12:16
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\alumno_content_consulta_horario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661b499014c281_78837467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a7d25fb34a9eb26ef37f477edfdf7673806151c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\alumno_content_consulta_horario.tpl',
      1 => 1712454037,
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
function content_661b499014c281_78837467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:alumno_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:alumno_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <div id="contenidoHTML"></div>
    <?php echo '<script'; ?>
>
        js_client_api_alumno_consultar_horario();
    <?php echo '</script'; ?>
>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:alumno_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
