<?php
/* Smarty version 4.3.4, created on 2024-04-22 02:16:25
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_registrar_asistencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625ac59cce286_57368463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fa369634dd774e8adad335ba4dcbd10951a3149' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_registrar_asistencia.tpl',
      1 => 1713684490,
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
function content_6625ac59cce286_57368463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:profe_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:profe_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <form method="PUT" action="">
        <input id="nickname" type="text" placeholder="Nickname del alumno">
        <br>
        <select id="registro_asistencia">
            <option value="Presente">Presente</option>
            <option value="Ausente">Ausente</option>
        </select>
        <br>
        <button type="button" onclick="registrar_asistencia()">Agregar</button>
        <input type="button" value="Limpiar campos" onClick="location.reload();">
    </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
