<?php
/* Smarty version 4.3.4, created on 2024-04-14 18:21:17
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\alumno_content_lista_profesores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c027d38f830_73314416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c82af69e5bfff56e4286f24e822f35224af2ea5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\alumno_content_lista_profesores.tpl',
      1 => 1713111563,
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
function content_661c027d38f830_73314416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:alumno_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:alumno_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<div id="contenidoHTML_tres">
<?php echo '<script'; ?>
>
listar_profesores();
<?php echo '</script'; ?>
>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:alumno_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
