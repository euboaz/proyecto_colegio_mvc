{include file="profe_head.tpl"}
{include file="profe_body.tpl"}
<div class="columna2">
    <script>
        modificar_calificaciones();
    </script>
    <div id="contenidoHTML_ocho"></div>
    <form>
        <input type="hidden" name="accion" alue="modificar_notas">
        <input type="text" id="nickname_alumno" placeholder="Nickname Estudiante">
        <input type="text" id="nota_usuario" placeholder="Nota">
        <button type="button" onclick="modificar_calificaciones_dos(),location.reload();">Guardar</button>
    </form>
</div>
</div>
{include file="profe_footer.tpl"}