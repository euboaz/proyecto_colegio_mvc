<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_administrador">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
            <!-- Bot�n cerrar sesi�n a la derecha -->
            <div class="d-flex justify-content-end">
                <form>
                    <input type="hidden" name="accion" value="menu_principal">
                    <button type="submit" class="btn btn-primary" onclick="cerrarSesion()">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </nav>
    <input id="nickname_usuario" type="hidden" name="nickname_usuario" value="{$nickname_usuario}">
    <div class="container-fluid">
        <div class="columna1">
            <div id="fila2">
                <form>
                    <input type="hidden" name="accion" value="agregar_usuario">
                    <button type="submit" class="boton_main">Agregar Usuario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="eliminar_usuario">
                    <button type="submit" class="boton_main">Eliminar usuario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="modificar_datos_usuario">
                    <button type="submit" class="boton_main">Modificar Datos Usuario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="agregar_asignatura">
                    <button type="submit" class="boton_main">Agregar Asignatura</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="eliminar_asignatura">
                    <button type="submit" class="boton_main">Eliminar Asignatura</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="modificar_datos_asignatura">
                    <button type="submit" class="boton_main">Modificar Datos Asignatura</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="matricula_alumno_asignatura">
                    <button type="submit" class="boton_main">Matricular alumno a una asignatura</button>
                </form>


            </div>
</div>