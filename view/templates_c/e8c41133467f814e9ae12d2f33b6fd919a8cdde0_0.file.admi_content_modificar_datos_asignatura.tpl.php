<?php
/* Smarty version 4.3.4, created on 2024-04-22 02:28:25
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_modificar_datos_asignatura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625af29cf6e60_51057334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c41133467f814e9ae12d2f33b6fd919a8cdde0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_modificar_datos_asignatura.tpl',
      1 => 1713684583,
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
function content_6625af29cf6e60_51057334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admi_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <?php echo '<script'; ?>
>
        mostrar_usuarios();
    <?php echo '</script'; ?>
>
    <div id="contenidoHTML_diez"></div>
    <form>
        <input type="number" id="indice_asignatura" placeholder="Indice asignatura">
        <input type="text" id="nombre_asignatura" placeholder="Nombre asignatura">
        <input type="text" id="horario_asignatura" placeholder="Horario asignatura">
        <button type="button" onclick="modificar_asignatura(),location.reload();">Modificar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
