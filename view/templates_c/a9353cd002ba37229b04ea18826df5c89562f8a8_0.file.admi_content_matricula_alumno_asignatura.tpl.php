<?php
/* Smarty version 4.3.4, created on 2024-04-22 02:28:27
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_matricula_alumno_asignatura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6625af2b9a9708_56275195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9353cd002ba37229b04ea18826df5c89562f8a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_matricula_alumno_asignatura.tpl',
      1 => 1713684597,
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
function content_6625af2b9a9708_56275195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admi_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <h1>Matricular Alumno</h1>
    <form method="PUT" action="">
        <input id="nickname" type="text" placeholder="Nickname del alumno">
        <br>
        <input id="asignatura" type="text" placeholder="Nombre de la asignatura">
        <br>
        <button type="button" onclick="matricula_alumno_asignatura()">Consultar</button>
        <input type="button" value="Limpiar campos" onClick="location.reload();">
    </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
