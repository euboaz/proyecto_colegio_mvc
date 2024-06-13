{include file="admi_head.tpl"}
{include file="admi_body.tpl"}
<div class="columna2">
    <script>
        mostrar_usuarios();
    </script>
    <div id="contenidoHTML_nueve"></div>
    <form>
        <input type="text" id="nickname_usuario_modificar" placeholder="Nickname del usuario">
        <input type="text" id="nombre_usuario" placeholder="Nombre del usuario">
        <input type="text" id="apellidos_usuario" placeholder="Apellido del usuario">
        <select class="SingInValues" id="tipo_usuario_modificar">
            <option value="1">Estudiante</option>
            <option value="2">Profesor</option>
            <option value="3">Administrador</option>
        </select>
        <button type="button" onclick="modificar_usuarios(),location.reload();">Modificar</button>
    </form>
</div>
{include file="admi_footer.tpl"}