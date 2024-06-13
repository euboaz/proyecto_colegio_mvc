{include file="admi_head.tpl"}
{include file="admi_body.tpl"}
<div class="columna2">
    <script>
        mostrar_usuarios();
    </script>
    <div id="contenidoHTML_diez"></div>
    <form>
        <input type="number" id="indice_asignatura" placeholder="Indice asignatura">
        <input type="text" id="nombre_asignatura" placeholder="Nombre asignatura">
        <input type="text" id="horario_asignatura" placeholder="Horario asignatura">
        <button type="button" onclick="modificar_asignatura(),location.reload();">Modificar</button>
    </form>
</div>
{include file="admi_footer.tpl"}