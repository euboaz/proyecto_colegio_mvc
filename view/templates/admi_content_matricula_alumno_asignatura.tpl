{include file="admi_head.tpl"}
{include file="admi_body.tpl"}
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
{include file="admi_footer.tpl"}