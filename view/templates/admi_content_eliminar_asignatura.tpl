{include file="admi_head.tpl"}
{include file="admi_body.tpl"}
<div class="columna2">
<form method="DEL" action="">
<h1>Eliminar asignatura</h1>
<input id="nombre_asignatura" type="text" placeholder="Nombre asignatura">
<br>
<button type="button" onclick="eliminar_asignatura()">Eliminar</button>
<input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
{include file="admi_footer.tpl"}