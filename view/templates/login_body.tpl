<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand me-auto" href="?accion=menu_principal">
                <img src="https://www.investigacionuh.com/assets/img/logo.png" width="200" height="45" alt="Logo">
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="columna1">
            <div id="fila2">
                <form>
                    <input type="hidden" name="accion" value="localizacion">
                    <button type="submit" class="boton_main">Localización</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="caracteristicas">
                    <button type="submit" class="boton_main">Características</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="instalaciones">
                    <button type="submit" class="boton_main">Instalaciones</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="servicios">
                    <button type="submit" class="boton_main">Servicios</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="informacion">
                    <button type="submit" class="boton_main">Información</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="proyectos">
                    <button type="submit" class="boton_main">Proyectos de escuela</button>
                </form>
            </div>
            <div id="fila3">
                <form>
                    <h1 id="SingInTxt">Iniciar Sesión</h1>
                    <label class="SingInLabels">Tipo: </label>
                    <select class="SingInValues" name="tipo_usuario">
                        <option value="1">Alumno</option>
                        <option value="2">Profesor</option>
                        <option value="3">Administrador</option>
                    </select>
                    <label class="SingInLabels">Usuario: </label>
                    <input class="SingInValues" type="text" name="nickname_usuario">
                    <label class="SingInLabels">Clave: </label>
                    <input class="SingInValues" type="password" name="pass_usuario">
                    <input type="hidden" name="accion" value="validar_login">
                    <button class="SingInbtnIngresar" id="SingInbtn1" type="submit">Ingresar</button>
                </form>
                <form>
                    <input type="hidden" name="accion" value="registro">
                    <button type="submit" class="SingInbtnRegistrarse">Registrarse</button>
                </form>
            </div>
</div>