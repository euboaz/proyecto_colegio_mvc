<?php
/* Smarty version 4.3.4, created on 2024-04-23 02:36:44
  from 'C:\xampp\htdocs\Proyecto_Final_Progra_MVC\view\templates\admi_content_agregar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6627029c5745b4_74340785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1768c47cfe38bdd92bbeae02fad306d5332d91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto_Final_Progra_MVC\\view\\templates\\admi_content_agregar_usuario.tpl',
      1 => 1713832123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alumno_head.tpl' => 1,
    'file:admi_body.tpl' => 1,
    'file:admi_footer.tpl' => 1,
  ),
),false)) {
function content_6627029c5745b4_74340785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:alumno_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admi_body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="columna2">
    <form method="PUT" action="">
        <h1>Agregar usuario</h1>
        <input id="nickname" type="text" placeholder="Nickname">
        <br>
        <input id="pass" type="password" placeholder="Contraseña">
        <br>
        <input id="nombre_usuario" type="text" placeholder="Nombre del usuario">
        <br>
        <input id="apellidos_usuario" type="text" placeholder="Apellidos del usuario">
        <br>
        <select id="tipo_usuario">
            <option value="1">Alumno</option>
            <option value="2">Profesor</option>
            <option value="3">Administrador</option>
        </select>
        <br>
        <button type="button" onclick="agregar_usuario()">Enviar</button>
        <input type="button" value="Limpiar campos" onClick="location.reload();">
    </form>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admi_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
