<!-- registro -->
<div class="container login">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form id="side2" method="post" enctype="multipart/form-data">
                <h3 class = "pt-3">Crear cuenta</h3>
                <div class="inp form-group">
                    <input type="text" name = "UsuNombre" id="name" placeholder="Nombre" required>
                    <input type="text" name = "UsuApellido" id="lastname" placeholder="Apellido" required>
                    <input type="text" name = "UsuTelefono" id="phonenumber" placeholder="Telefono" required>
                    <input type="text" name = "UsuDireccion" id="address" placeholder="Direccion" required>
                    <input type="email" name = "UsuCorreo" id="email" placeholder="Correo electrónico" required>
                    <input type="password" name = "UsuContrasenia" id="password" placeholder="Contraseña" required>
                </div>
                <div id="login">
                    <button type="submit" values="REGISTRARSE">REGISTRARSE</button>
                </div>
                <p class = "pb-3">¿Ya tienes una cuenta? <a onclick="redirigir('login')">Iniciar Sesión</a></p>

                <?php
                $crearUsuario = new ControladorUsuarios();
                $crearUsuario -> ctrCrearUsuario();
                ?>
            </form>
        </div>
    </div>
</div>
<!-- registro -->