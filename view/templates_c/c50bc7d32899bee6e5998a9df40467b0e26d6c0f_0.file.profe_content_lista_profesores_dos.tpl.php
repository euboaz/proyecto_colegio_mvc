<?php
/* Smarty version 4.3.4, created on 2024-04-14 20:28:23
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_lista_profesores_dos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c20470632e8_92574029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c50bc7d32899bee6e5998a9df40467b0e26d6c0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_lista_profesores_dos.tpl',
      1 => 1713119298,
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
function content_661c20470632e8_92574029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:profe_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:profe_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
