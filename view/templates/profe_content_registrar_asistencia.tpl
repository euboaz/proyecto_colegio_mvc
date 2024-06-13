{include file="profe_head.tpl"}
{include file="profe_body.tpl"}
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
{include file="profe_footer.tpl"}