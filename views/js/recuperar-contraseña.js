/*=============================================
GENERACIÓN DE CÓDIGO DE RECUPERACIÓN
=============================================*/
function generacion_codigo(){
    //obtenemos el input del correo de recuperación.
    let correo = document.getElementById('email-recuperacion');
    console.log(correo.value);

    let email_completo = correo.value + "@gmail.com";
	var datos = new FormData();
    datos.append("enviarCorreo", email_completo);
	 $.ajax({
	    url:"views/ajax/recuperar-contraseña.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	console.log("respuesta", respuesta);
	    	if(respuesta){
				const sonido = document.getElementById('acierto_sound');
				sonido.play();
				swal({
					type: "success",
					title: "¡Código de Recuperación enviado, revisar su correo electrónico!",
					showConfirmButton: true,
					confirmButtonText: "Cerrar"
				});
	    	}
			else{
				const sonido = document.getElementById('error_sound');
				sonido.play();
				swal({
					type: "error",
					title: "¡El correo ingresado no se encuentra registrado, ingrese de nuevo!",
					showConfirmButton: true,
					confirmButtonText: "Cerrar"
				});
			}
	    }
	})
}

/*=============================================
VERIFICACIÓN DE CÓDIGO DE RECUPERACIÓN
=============================================*/
function verificacion_codigo(){
	const sonido = document.getElementById('acierto_sound');
	sonido.play();
}

function reproducir_sonido(NombreSonido){
	const sonido = document.getElementById(NombreSonido);
	sonido.play();
}
/*=============================================
CONTRASEÑAS IGUALES
=============================================*/
function contraseñas_iguales(){
	// $(".alert").remove();
    // let new_password = document.getElementById('new-password');
	// let new_confirm_password = document.getElementById('new-confirm-password');
	// if(new_confirm_password.value.length > 0 && new_confirm_password.value!="" && new_password.value != new_confirm_password.value){
	// 	$("#new-confirm-password").after('<div class="alert alert-warning">¡Las contraseñas no coinciden!</div>');
	// }
}
