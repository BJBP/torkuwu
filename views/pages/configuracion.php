<?php
    if (!isset($_SESSION["iniciarSesion"])){
        echo '<script>
            window.location = "index.php?ruta=login";
        </script>';
    }
?>
<section class="content container login">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="body">
            <div class="card card-opcion text-black" style="background-color: white; border-radius: 5px;">
                <div class="container-fluid">           
                    <div class="row clearfix" style="margin-top:20px;margin-bottom:20px;">
                        <div class="col-xs-12 col-sm-3">
                            <div class="card card-about-me">
                                
                                <div class="body">
                                    <div class="card card-opcion">
                                        <ul class="list-group list-group-flush" style="font-size: 14px;margin-top: 10px; cursor: pointer;color: #881515;">
                                            <li class="list-group-item activo" id="list-personales">
                                                <a class="configuracion-activo" id="btn-datos-personales">
                                                <img class="me-2" id="img-personales" src="./assets/icons/usuario.png">Datos personales</a> </li>
                                            <li class="list-group-item" id="list-config"> 
                                                <a class="configuracion-no-activo" id="btn-config">
                                                <img class="me-2" id="img-config" src="./assets/icons/configuraciones.png">Configuración</a></li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-9" id="configuracion-datos-personales">
                            <div class="card">
                                <div class="body">
                                    <!-- Tabs With Icon Title -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body ps-4 pt-4 pb-2">
                                                    <div class="card-opcion">
                                                        <div class="row clearfix">
                                                            <div class="col form-control-label">
                                                                <label class="configuracion-label  pe-auto text-start" for="name">Nombre</label>
                                                                <input type="text" id="configuracion-name" class="configuracion-input" disabled>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row clearfix">
                                                            <div class="col form-control-label">
                                                                <label class="configuracion-label  pe-auto text-start" for="surname">Apellido</label>
                                                                <input type="text" id="configuracion-surname" class="configuracion-input" disabled>
                                                            </div>
                                                        </div>
                                                        <p></p>
                                                        <div class="row clearfix">
                                                            <div class="col form-control-label">
                                                                <label class="configuracion-label  pe-auto text-start" for="fijo">Telefono</label>
                                                                <input type="text" id="configuracion-fijo" class="configuracion-input">
                                                            </div>
                                                        </div>
                                                        <p></p>
                                                        <div class="row clearfix">
                                                            <div class="col form-control-label">
                                                                <label class="configuracion-label  pe-auto text-start" for="address">Direccion</label>
                                                                <input type="text" id="configuracion-address" class="configuracion-input">
                                                            </div>
                                                        </div>
                                                        <p></p>
                                                        <div class="row clearfix">
                                                            <div class="col form-control-label">
                                                                <label class="configuracion-label pe-auto text-start" for="email">Correo</label>
                                                                <input type="text" id="configuracion-email" class="configuracion-input" disabled>
                                                            </div>
                                                        </div>
                                                        <p></p>
                                                        <div class="row clearfix" style="text-align:center; padding:10px 0 10px 0;">
                                                            <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-5 col-xs-offset-6">
                                                                <button type="button" id="btn-actualizar-datos" style="color: white; background-color: #881515; border: none;
                                                                font-weight: bold;" class="btn btn-primary m-t-15" onclick="">ACTUALIZAR</button>
                                                            </div>
                                                        </div> 
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-9 d-none" id="configuracion-configuracion">
                            <div class="card">
                                <div class="body">
                                    <!-- Tabs With Icon Title -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <p style=" margin-top: 10px; margin-bottom: 10px; font-size: 2em; font-weight: bold;">Cambiar contraseña</p>
                                                <br>
                                                <div class="body" style="padding:15px 10px 30px 80px;">
                                                    <div class="card-opcion">                                   <form method="post" enctype="multipart/form-data">             
                                                            <div class="row clearfix">
                                                                <div class="col form-control-label">
                                                                    <label class="configuracion-label  pe-auto text-start" for="password_nueva">Nueva Contraseña</label>
                                                                    <input type="password" name ='UsuContrasenia' id="configuracion-password" class="configuracion-input" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row clearfix">
                                                                <div class="col form-control-label">
                                                                    <label class="configuracion-label  pe-auto text-start" for="password_confirm">Confirmar contraseña</label>
                                                                    <input type="password" name ='UsuConfirmarContrasenia' id="configuracion-password-confirm" class="configuracion-input" required>
                                                                </div>
                                                            </div>
                                                            <br>


                                                            <div class="row clearfix" style="text-align:center; padding:10px 0 15px 0; margin-left: 100px;">
                                                                <div class="col-xs-12 col-sm-3">
                                                                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-5 col-xs-offset-6">
                                                                        <button type="button"   style="color: white; background-color: #881515; border: none;
                                                                        font-weight: bold;" class="btn btn-primary m-t-15" onclick="">CANCELAR</button>
                                                                    </div>  
                                                                </div>
                                                                <div class="col-xs-12 col-sm-3" style="margin-left: 100px;">
                                                                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-5 col-xs-offset-6">
                                                                        <button type="submit"   style="color: white; background-color: #881515; border: none;
                                                                        font-weight: bold;" class="btn btn-primary m-t-15">ACTUALIZAR</button>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <?php
                                                                $crearUsuario = new ControladorUsuarios();
                                                                $crearUsuario -> ctrCambiarContraseña($_SESSION["id_usuario"],'configuracion');
                                                            ?>
                                                        </form>  
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</section>