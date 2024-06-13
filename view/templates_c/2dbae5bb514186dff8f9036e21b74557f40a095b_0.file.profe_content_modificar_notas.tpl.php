<?php
/* Smarty version 4.3.4, created on 2024-04-22 02:16:26
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_modificar_notas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625ac5a758787_72114266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dbae5bb514186dff8f9036e21b74557f40a095b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_modificar_notas.tpl',
      1 => 1713684496,
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
function content_6625ac5a758787_72114266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:profe_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:profe_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <?php echo '<script'; ?>
>
        modificar_calificaciones();
    <?php echo '</script'; ?>
>
    <div id="contenidoHTML_ocho"></div>
    <form>
        <input type="hidden" name="accion" alue="modificar_notas">
        <input type="text" id="nickname_alumno" placeholder="Nickname Estudiante">
        <input type="text" id="nota_usuario" placeholder="Nota">
        <button type="button" onclick="modificar_calificaciones_dos(),location.reload();">Guardar</button>
    </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
