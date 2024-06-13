<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_alumno">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
            <!-- Botón cerrar sesión a la derecha -->
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
                    <input type="hidden" name="accion" value="consulta_horario">
                    <button type="submit" class="boton_main">Consultar Horario</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="lista_alumnos_clase">
                    <button type="submit" class="boton_main">Alumnos del curso</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="lista_profesores">
                    <button type="submit" class="boton_main">Lista Profesores</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="consulta_notas">
                    <button type="submit" class="boton_main">Consultar Notas</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="consulta_asistencia">
                    <button type="submit" class="boton_main">Consultar Asistencia</button>
                </form>
            </div>
</div>