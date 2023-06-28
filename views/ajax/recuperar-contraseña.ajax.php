<?php
session_start(); 
require_once "../../controllers/UsuariosController.php";
require_once "../../models/Usuario.php";
require_once "../../models/conexion.php";

class AjaxUsuario{
	/*=============================================
	VALIDAR SI EL USUARIO ESTA REGISTRADO
	=============================================*/	

	public $validarUsuario;
	// public $validarCodigo;
	public $nuevoTelefono;
	public $nuevoCorreo;

	public function ajaxValidarUsuario(){
		$item = "Usucorreo";
		$valor = $this->validarUsuario;
		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
		if (isset($respuesta['UsuCorreo'])){
			$caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   			$longitud = 8;
   			$codigo_aleatorio = substr(str_shuffle($caracteres_permitidos), 0, $longitud);
			
			$stmt = Conexion::conectar()->prepare("DELETE FROM codigo_recuperacion WHERE idUsuario = :idUsuario");
			$stmt -> bindParam(":idUsuario", $respuesta['Usuid'], PDO::PARAM_STR);
			$stmt->execute();
			// $stmt -> close();
			$stmt = null;

			$stmt = Conexion::conectar()->prepare("INSERT INTO codigo_recuperacion(
			cadena_codigo,
			idUsuario) 
			VALUES (
			:cadena_codigo,
			:idUsuario)");

			$stmt->bindParam(":cadena_codigo", $codigo_aleatorio, PDO::PARAM_STR);
			$stmt->bindParam(":idUsuario", $respuesta['Usuid'], PDO::PARAM_STR);
			$stmt->execute();
			// $stmt2 -> close();
			// $stmt2 = null;
			
			include '../pages/enviar-correo.php';
			
		}
		
		echo json_encode($respuesta);
	}

	public function ajaxLlenarDatos() {
		$item = "Usuid";
		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $_SESSION["id_usuario"]);
		echo json_encode($respuesta);
	
	}

	public function ajaxEditarDatos() {
		$tabla = 'usuario';
		$datos = array(
			"UsuTelefono" => $this->nuevoTelefono,
			"UsuDireccion" => $this->nuevoCorreo,
			"Usuid" => $_SESSION["id_usuario"]);

		$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

		echo json_encode($respuesta);
	
	}

	/*=============================================
	VERIFICAR CORREO Y CODIGO DE RECUPERACION
	=============================================*/	
	// public function ajaxVerificarUsuario(){
	// 	$item = "Usucorreo";
	// 	$valor = $this->validarUsuario;
	// 	$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
	// 	$valor2 = $this->validarCodigo;
	// 	$respuesta2 = ModeloUsuarios::MdlMostrarUsuarios('codigo_recuperacion', 'cadena_codigo', $valor2);
	// 	if (isset($respuesta['UsuCorreo']) && isset($respuesta2['cadena_codigo'])){
	// 		$respuesta3 = ModeloUsuarios::MdlMostrarUsuarios('codigo_recuperacion', 'idUsuario', $respuesta['Usuid']);
	// 		if(isset($respuesta3['cadena_codigo']) && $respuesta3['cadena_codigo']==$respuesta2['cadena_codigo']){
	// 			$_SESSION["id_Usuario"] =  $respuesta['Usuid'];
	// 			echo json_encode($respuesta);
	// 		}
	// 		else{
	// 			echo json_encode(false);
	// 		}
						
	// 	}
	// 	else{
	// 		echo json_encode(false);
	// 	}
	// 	// echo json_encode($respuesta);
	// }
}

/*=============================================
VALIDAR SI EL USUARIO ESTA REGISTRADO
=============================================*/	
if(isset( $_POST["enviarCorreo"])){
	$valUsuario = new AjaxUsuario();
	$valUsuario -> validarUsuario = $_POST["enviarCorreo"];
	$valUsuario -> ajaxValidarUsuario();
}

/*=============================================
LLENAR DATOS DE USUARIO
=============================================*/	
if(isset( $_POST["LlenadoDatos"])){
	$LLenaUsuario = new AjaxUsuario();
	$LLenaUsuario -> ajaxLlenarDatos();
}

/*=============================================
EDITAR DATOS DE USUARIO
=============================================*/	
if(isset( $_POST["Usutelefono"])){
	$EditaUsuario = new AjaxUsuario();
	$EditaUsuario -> nuevoTelefono = $_POST["Usutelefono"];
	$EditaUsuario -> nuevoCorreo = $_POST["Usudireccion"];
	$EditaUsuario -> ajaxEditarDatos();
}

/*=============================================
VERIFICAR CORREO Y CODIGO DE RECUPERACION
=============================================*/	
// if(isset( $_POST["verificarCorreo"])){
// 	$veriUsuario = new AjaxUsuario();
// 	$veriUsuario -> validarUsuario = $_POST["verificarCorreo"];
// 	$veriUsuario -> validarCodigo = $_POST["verificarCodigo"];
// 	$veriUsuario -> ajaxVerificarUsuario();
// }