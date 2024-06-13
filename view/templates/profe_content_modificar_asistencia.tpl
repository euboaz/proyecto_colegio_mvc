{include file="profe_head.tpl"}
{include file="profe_body.tpl"}
<div class="columna2">
    <div id="contenidoHTML_siete"></div>
    <script>
        listar_asistencia_profesor();
    </script>
    <form>
        <input type="number" id="indice_asistencia" placeholder="Indice asistencia">
        <select class="SingInValues"  id="registro_asistencia">
            <option value="Ausente">Ausente</option>
            <option value="Presente">Presente</option>
        </select>
        <button type="button" onclick="modificar_asistencia(),location.reload();">Modificar</button>
    </form>
</div>
</div>
</div>
{include file="profe_footer.tpl"}