<?php
/* Smarty version 4.3.4, created on 2024-04-14 21:44:20
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_lista_asistencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c32140f64e1_15894411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5deaf7c9454b21c11c5a128fe777f4c227b12dd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_lista_asistencia.tpl',
      1 => 1713123761,
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
function content_661c32140f64e1_15894411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:profe_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:profe_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<div id="contenidoHTML_siete"></div>
<?php echo '<script'; ?>
>
    listar_asistencia_profesor();
<?php echo '</script'; ?>
>
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
