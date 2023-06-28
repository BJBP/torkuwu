<!-- recuperar-contraseña -->
<div class="container login">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form class="pb-4" id="side2" method="post" enctype="multipart/form-data">
                <h3 class = "pt-3">Recuperación de contraseña</h3>
                <div class="inp form-group">
                    <div class="grupo-input mb-3">
                        <input type="text" name = "UsuCorreo" placeholder="Parte Inicial del Correo" id ="email-recuperacion" aria-label="Correo electónico" aria-describedby="basic-addon2" required>
                        <div class="grupo-input-append">
                            <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                        </div>
                    </div>
                    <div class="recuperar-contraseña-button" id="login"><button type="button" values="Solicitar código" onclick="generacion_codigo()">Solicitar código</button></div>
                    <input type="text" name = "UsuCodigo" id="code" placeholder="Escribir código de recuperación" required>
                </div>
                <div id="login"><button type="submit" values="ENVIAR">ENVIAR</button></div>

                <?php
                $crearUsuario = new ControladorUsuarios();
                $crearUsuario -> ctrVerificarRecuperacion();
                ?>
            </form>
        </div>
    </div>
</div>
<!-- recuperar-contraseña -->