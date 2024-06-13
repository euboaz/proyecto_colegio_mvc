{include file="alumno_head.tpl"}
{include file="admi_body.tpl"}
<div class="columna2">
    <form method="PUT" action="">
        <h1>Agregar usuario</h1>
        <input id="nickname" type="text" placeholder="Nickname">
        <br>
        <input id="pass" type="password" placeholder="Contraseña">
        <br>
        <input id="nombre_usuario" type="text" placeholder="Nombre del usuario">
        <br>
        <input id="apellidos_usuario" type="text" placeholder="Apellidos del usuario">
        <br>
        <select id="tipo_usuario">
            <option value="1">Alumno</option>
            <option value="2">Profesor</option>
            <option value="3">Administrador</option>
        </select>
        <br>
        <button type="button" onclick="agregar_usuario()">Enviar</button>
        <input type="button" value="Limpiar campos" onClick="location.reload();">
    </form>
</div>
</div>
{include file="admi_footer.tpl"}