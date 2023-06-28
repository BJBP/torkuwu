<!-- login -->
<div class="container login">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form id="side2" method="post" enctype="multipart/form-data">
                <h3 class = "pt-3">Inicio de sesión</h3>
                <div class="inp form-group">
                    <input type="email" name = "UsuCorreo" id="email" placeholder="Correo electónico" required>
                    <input type="password" name = "UsuContrasenia" id="password" placeholder="Contraseña" required>
                </div>
                <div class="olvido-contraseña">
                    <a onclick="redirigir('recuperar-contraseña')">¿Olvidaste tu contraseña?</a>
                </div>
                <div id="login"><button type="submit" values="INGRESAR">INGRESAR</button></div>
                <p class = "pb-3" >¿Eres nuevo en Torkuwu? <a onclick="redirigir('registrar')">Registrate</a></p>

                <?php
                $IngresoUsuario = new ControladorUsuarios();
                $IngresoUsuario -> ctrIngresoUsuario();
                ?>
            </form>
        </div>
    </div>
</div>
<!-- login -->