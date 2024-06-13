{include file="alumno_head.tpl"}
{include file="alumno_body.tpl"}
<div class="columna2">
    <form method="PUT">
<input id="asignatura" type="text" placeholder="Ingrese la asignatura: ">
<button type="button" onclick="consulta_asignaturas()">Consultar</button>
    </form>
    <br>
    <div id="contenidoHTML_dos"></div>
</div>
</div>
{include file="alumno_footer.tpl"}