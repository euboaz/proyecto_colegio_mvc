{include file="admi_head.tpl"}
{include file="admi_body.tpl"}
<div class="columna2">
<form method="PUT" action="">
<h1>Eliminar usuario</h1>
<input id="nickname" type="text" placeholder="Nickname">
<br>
<button type="button" onclick="eliminar_usuario()">Enviar</button>
<input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
{include file="admi_footer.tpl"}