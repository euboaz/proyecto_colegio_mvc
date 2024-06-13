{include file="profe_head.tpl"}
{include file="profe_body.tpl"}
<div class="columna2">
<form method="PUT" action="">
    <input id="nickname" type="text" placeholder="Nickname del alumno">
    <br>
    <input id="calificacion" type="text" placeholder="Ingrese la calificacion">
    <br>
    <button type="button" onclick="registrar_calificaciones()">Agregar</button>
    <input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
{include file="profe_footer.tpl"}