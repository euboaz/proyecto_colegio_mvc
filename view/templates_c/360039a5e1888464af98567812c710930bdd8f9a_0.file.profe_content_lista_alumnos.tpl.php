<?php
/* Smarty version 4.3.4, created on 2024-04-14 20:30:11
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\profe_content_lista_alumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661c20b36f6fe0_33299839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360039a5e1888464af98567812c710930bdd8f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\profe_content_lista_alumnos.tpl',
      1 => 1713119401,
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
function content_661c20b36f6fe0_33299839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:profe_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:profe_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
<form method="PUT">
<input id="asignatura" type="text" placeholder="Ingrese la asignatura: ">
<button type="button" onclick="consulta_asignaturas()">Consultar</button>
    </form>
    <br>
    <div id="contenidoHTML_dos"></div>
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:profe_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
