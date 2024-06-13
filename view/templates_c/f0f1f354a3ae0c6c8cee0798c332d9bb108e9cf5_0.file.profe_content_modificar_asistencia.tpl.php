<?php
/* Smarty version 4.3.4, created on 2024-04-21 06:44:56
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_modificar_asistencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_662499c8551af6_10014122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f1f354a3ae0c6c8cee0798c332d9bb108e9cf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_modificar_asistencia.tpl',
      1 => 1713671673,
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
function content_662499c8551af6_10014122 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form>
        <input type="number" id="indice_asistencia" placeholder="Indice asistencia">
        <select class="SingInValues"  id="registro_asistencia">
            <option value="Ausente">Ausente</option>
            <option value="Presente">Presente</option>
        </select>
        <button type="button" onclick="modificar_asistencia(),location.reload();">Modificar</button>
    </form>
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
