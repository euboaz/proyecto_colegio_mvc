{include file="admi_head.tpl"}
{include file="admi_body.tpl"}
<div class="columna2">
<form method="PUT" action="">
<h1>Agregar asignatura</h1>
<input id="nombre_asignatura" type="text" placeholder="Nombre asignatura">
<br>
<select id="horario">
    <option value="Lunes">Lunes</option>
    <option value="Martes">Martes</option>
    <option value="Miercoles">Miercoles</option>
    <option value="Jueves">Jueves</option>
    <option value="Viernes">Viernes</option>
    <option value="Sabado">Sabado</option>
</select>
<br>
<button type="button" onclick="agregar_asignatura()">Agregar</button>
<input type="button" value="Limpiar campos" onClick="location.reload();">
</form>
</div>
</div>
{include file="admi_footer.tpl"}