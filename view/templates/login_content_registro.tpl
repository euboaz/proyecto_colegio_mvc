{include file="login_head.tpl"}
{include file="login_body.tpl"}
<div class="columna2">
    <form>
        <h1 id="SingInTxt">Registrarse</h1>
        <select class="SingInValues" name="tipo_usuario">
            <option value="" selected disabled>Seleccione el tipo de usuario</option>
            <option value="1">Alumno</option>
            <option value="2">Profesor</option>
        </select>
        <input class="SingInValues" type="text" placeholder="Usuario" name="nickname_usuario">
        <input class="SingInValues" type="password" placeholder="Contraseña" name="pass_usuario">
        <input class="SingInValues" type="text" placeholder="Nombre" name="nombre_usuario">
        <input class="SingInValues" type="text" placeholder="Apellidos" name="apellidos_usuario">
        <input type="hidden" name="accion" value="registrar_nuevo">
        <button type="submit" class="SingInbtnRegistrarse">Crear Usuario</button>
    </form>
</div>
{include file="login_footer.tpl"}