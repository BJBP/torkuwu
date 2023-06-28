<?php
class ControladorUsuarios{
	/*=============================================
	INGRESO DE USUARIO
	=============================================*/
	static public function ctrIngresoUsuario(){
		if(isset($_POST["UsuCorreo"]) && isset($_POST["UsuContrasenia"])){
			$tabla = "usuario";
			$item = "UsuCorreo";
			$valor = $_POST["UsuCorreo"];

			$tabla1 = "tipo_usuario";
			$item1 = "TusuId";

			$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

			if(isset($respuesta["UsuCorreo"]) == isset($_POST["UsuCorreo"]) && $respuesta["UsuContrasenia"] == $_POST["UsuContrasenia"]){
				$_SESSION["iniciarSesion"] = "ok";
				$_SESSION["id_usuario"] = $respuesta["Usuid"];
				$_SESSION["id_tipo_usuario"] = $respuesta["idTipo"];
				$_SESSION["usu_nombre"] = $respuesta["UsuNombre"];
				$_SESSION["usu_apellido"] = $respuesta["UsuApellido"];

				$rptaTUsuario = ModeloTipoUsuario::mdlMostrarTipoUsuario($tabla1, $item1, $_SESSION["id_tipo_usuario"]);

				$_SESSION["perfil"] = $rptaTUsuario["TusuNombre"];

				echo '<script>
					swal({
						type: "success",
						title: "¡Bienvenido '.$_SESSION["usu_nombre"].' '.$_SESSION["usu_apellido"].'!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "index.php";
						}
					});
					</script>';
			}else{
				echo '<script>
					swal({
						type: "error",
						title: "¡Correo y/o contraseña, revise y vuelva a intentar!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "index.php?ruta=login";
						}
					});
					</script>';
			}
		}	
	}

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/
	static public function ctrCrearUsuario(){
		if(isset($_POST["UsuCorreo"]) && isset($_POST["UsuContrasenia"])){
			/*=============================================
			CORROBORANDO SI EL CORREO INGRESADO YA SE ENCUENTRA REGISTRADO
			=============================================*/
			$tabla = "usuario";
			$item = "UsuCorreo";
			$valor = $_POST["UsuCorreo"];
			$stmt = Conexion::conectar()->prepare("SELECT COUNT(*) total FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			$totalRegistros = $stmt->fetchColumn();

			if($totalRegistros == 0) {
				$tabla = "usuario";
				$datos = array(
							   "UsuNombre" => $_POST["UsuNombre"],
							   "UsuApellido" => $_POST["UsuApellido"],
							   "UsuTelefono" => $_POST["UsuTelefono"],
							   "UsuDireccion" => $_POST["UsuDireccion"],
					           "UsuCorreo" => $_POST["UsuCorreo"],
					           "UsuContrasenia"=>$_POST["UsuContrasenia"]);
				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
				if($respuesta == "ok"){
					echo '<script>
					swal({
						type: "success",
						title: "¡Se ha registrado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "index.php?ruta=login";
						}
					});
					</script>';
				}
			}
			else{
				echo '<script>
					swal({
						type: "error",
						title: "¡El correo ingresado ya se encuentra registrado en el sistema!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "index.php?ruta=registrar";
						}
					});
					</script>';
			}
		}
	}

	
	/*=============================================
	MOSTRAR USUARIO
	=============================================*/
	static public function ctrMostrarUsuarios($item, $valor){
		$tabla = "usuario";
		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
		return $respuesta;
	}
	
	/*=============================================
	VERIFICAR CORREO Y CODIGO DE RECUPERACION
	=============================================*/	
	static public function ctrVerificarRecuperacion(){
		if(isset($_POST["UsuCorreo"]) && isset($_POST["UsuCodigo"])){
			$valor = $_POST["UsuCorreo"]."@gmail.com";
			$respuesta = ModeloUsuarios::MdlMostrarUsuarios('usuario', "UsuCorreo", $valor);
			$valor2 = $_POST["UsuCodigo"];
			$respuesta2 = ModeloUsuarios::MdlMostrarUsuarios('codigo_recuperacion', 'cadena_codigo', $valor2);
			if (isset($respuesta['UsuCorreo']) && isset($respuesta2['cadena_codigo'])){
				$respuesta3 = ModeloUsuarios::MdlMostrarUsuarios('codigo_recuperacion', 'idUsuario', $respuesta['Usuid']);
				if(isset($respuesta3['cadena_codigo']) && $respuesta3['cadena_codigo']==$respuesta2['cadena_codigo']){
					$_SESSION["id_Rec_Usuario"] =  $respuesta['Usuid'];
					echo '<script>

					const sonido = document.createElement("audio");
					sonido.src = "./assets/audios/acierto_sound.flac";
					sonido.setAttribute("preload", "auto");
					sonido.setAttribute("controls", "none");
					sonido.setAttribute("id", "acierto_sound");
					sonido.style.display = "none"; // <-- oculto
					document.body.appendChild(sonido);
					sonido.play();

					swal({
						type: "success",
						title: "¡Correo y código de recuperación verificados, proceda a crear su nueva contraseña!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "index.php?ruta=nueva-contraseña";
						}
					});
					</script>';
				}
				else{
					echo '<script>

					const sonido = document.createElement("audio");
					sonido.src = "./assets/audios/error_sound.flac";
					sonido.setAttribute("preload", "auto");
					sonido.setAttribute("controls", "none");
					sonido.setAttribute("id", "error_sound");
					sonido.style.display = "none"; // <-- oculto
					document.body.appendChild(sonido);
					sonido.play();

					swal({
						type: "error",
						title: "¡Correo y/o codigo incorrecto, revise y vuelva a intentar!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					});
					</script>';
				}
							
			}
			else{	
				echo '<script>

				const sonido = document.createElement("audio");
				sonido.src = "./assets/audios/error_sound.flac";
				sonido.setAttribute("preload", "auto");
				sonido.setAttribute("controls", "none");
				sonido.setAttribute("id", "error_sound");
				sonido.style.display = "none"; // <-- oculto
				document.body.appendChild(sonido);
				sonido.play();

					swal({
						type: "error",
						title: "¡Correo y/o codigo incorrecto, revise y vuelva a intentar!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					});
					</script>';
			}
		}
	}

	/*=============================================
	CAMBIAR CONTRASEÑA DE USUARIO
	=============================================*/
	static public function ctrCambiarContraseña($valor,$ruta){
		if(isset($_POST["UsuContrasenia"]) && isset($_POST["UsuConfirmarContrasenia"])){
			
			if($_POST["UsuContrasenia"]==$_POST["UsuConfirmarContrasenia"]){
				//Borrando codigo de recuperaciòn
				$stmt = Conexion::conectar()->prepare("DELETE FROM codigo_recuperacion WHERE idUsuario = :idUsuario");
				$stmt -> bindParam(":idUsuario", $valor, PDO::PARAM_STR);
				$stmt->execute();
				// $stmt -> close();
				$stmt = null;

				//Cambiando la contraseña
				$stmt = Conexion::conectar()->prepare("UPDATE usuario SET UsuContrasenia=:UsuContrasenia WHERE Usuid = :Usuid");
				$stmt -> bindParam(":UsuContrasenia", $_POST["UsuContrasenia"], PDO::PARAM_STR);
				$stmt -> bindParam(":Usuid", $valor, PDO::PARAM_STR);
				$stmt->execute();
				// $stmt -> close();
				$stmt = null;

				unset($_SESSION['id_Rec_Usuario']);

				echo '<script>

				const sonido = document.createElement("audio");
				sonido.src = "./assets/audios/acierto_sound.flac";
				sonido.setAttribute("preload", "auto");
				sonido.setAttribute("controls", "none");
				sonido.setAttribute("id", "acierto_sound");
				sonido.style.display = "none"; // <-- oculto
				document.body.appendChild(sonido);
				sonido.play();

				swal({
					type: "success",
					title: "¡Cambio de Contraseña Exitoso!",
					showConfirmButton: true,
					confirmButtonText: "Cerrar"
				}).then(function(result){
					if(result.value){
						window.location = "index.php?ruta='.$ruta.'";
					}
				});
				</script>';
			}
			else{
				echo '<script>

				const sonido = document.createElement("audio");
				sonido.src = "./assets/audios/error_sound.flac";
				sonido.setAttribute("preload", "auto");
				sonido.setAttribute("controls", "none");
				sonido.setAttribute("id", "error_sound");
				sonido.style.display = "none"; // <-- oculto
				document.body.appendChild(sonido);
				sonido.play();
					swal({
						type: "error",
						title: "¡Contraseñas no coincidentes, asegurese y vuelva a intentar!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					});
					</script>';
			}
		}
	}


}