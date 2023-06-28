<!-- recuperar-contraseña -->
<?php
    if(!isset($_SESSION["id_Rec_Usuario"])){
        echo '<script>
            window.location = "index.php?ruta=login";
        </script>';
    }
?>
<div class="container login">
    <div class="row">       
        <div class="col-md-8 offset-md-2">
            <form class="pb-4" id="side2" method="post" enctype="multipart/form-data">
                <h3 class = "pt-3">Recuperación de contraseña</h3>
                <div class="inp form-group">
                    <input type="password" name = "UsuContrasenia" id="new-password" placeholder="Contraseña nueva" onkeyup="contraseñas_iguales()" onpaste="return false" required>
                    <input type="password" name = "UsuConfirmarContrasenia" id="new-confirm-password" placeholder="Confirmar Contraseña" onkeyup="contraseñas_iguales()" onpaste="return false" required>
                </div>
                <div id="login">
                    <button type="submit" values="CONFIRMAR">CONFIRMAR</button>
                </div>
                <?php
                $crearUsuario = new ControladorUsuarios();
                $crearUsuario -> ctrCambiarContraseña($_SESSION["id_Rec_Usuario"],'login');
                ?>
            </form>
        </div>
    </div>
</div>
<!-- recuperar-contraseña -->