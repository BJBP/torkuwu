<?php
require_once "conexion.php";
class ModeloUsuarios{
	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/
	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
		$stmt -> close();
		$stmt = null;
	}
	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/
	static public function mdlIngresarUsuario($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
			UsuNombre,
			UsuApellido,
			UsuTelefono,
			UsuDireccion,
			UsuCorreo,
			UsuContrasenia,
			idTipo) 
			VALUES (
			:UsuNombre,
			:UsuApellido,
			:UsuTelefono,
			:UsuDireccion,
			:UsuCorreo,
			:UsuContrasenia,
			2)");
	
		$stmt->bindParam(":UsuNombre", $datos["UsuNombre"], PDO::PARAM_STR);
		$stmt->bindParam(":UsuApellido", $datos["UsuApellido"], PDO::PARAM_STR);
		$stmt->bindParam(":UsuTelefono", $datos["UsuTelefono"], PDO::PARAM_STR);
		$stmt->bindParam(":UsuDireccion", $datos["UsuDireccion"], PDO::PARAM_STR);
		$stmt->bindParam(":UsuCorreo", $datos["UsuCorreo"], PDO::PARAM_STR);
		$stmt->bindParam(":UsuContrasenia", $datos["UsuContrasenia"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		}

		
		$stmt->close();
		$stmt = null;
	}
	
	/*=============================================
	EDITAR USUARIO
	=============================================*/
	static public function mdlEditarUsuario($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
		UsuTelefono = :UsuTelefono,
		UsuDireccion = :UsuDireccion
		WHERE Usuid = :Usuid");
		$stmt -> bindParam(":UsuTelefono", $datos["UsuTelefono"], PDO::PARAM_INT);
		$stmt -> bindParam(":UsuDireccion", $datos["UsuDireccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":Usuid", $datos["Usuid"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}
}
