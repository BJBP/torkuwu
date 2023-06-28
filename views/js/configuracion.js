function llenarDatos(){
    var datos = new FormData();
	datos.append("LlenadoDatos", 'SI');
    $.ajax({
		url:"views/ajax/recuperar-contraseña.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

            $("#configuracion-name").val(respuesta["UsuNombre"]);
            $("#configuracion-surname").val(respuesta["UsuApellido"]);
            $("#configuracion-fijo").val(respuesta["UsuTelefono"]);
            $("#configuracion-address").val(respuesta["UsuDireccion"]);
			$("#configuracion-email").val(respuesta["UsuCorreo"]);
		}
	});

}

$( "#btn-actualizar-datos" ).on( "click", function() {
    var telefono = $("#configuracion-fijo").val();
    var direccion = $("#configuracion-address").val();
    
    var datos = new FormData();
	datos.append("Usutelefono", telefono);
    datos.append("Usudireccion", direccion);

    swal({
      title: '¿Está seguro de editar sus datos?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, editar datos!'
    }).then(function(result){
  
      if(result.value){
        $.ajax({
            url:"views/ajax/recuperar-contraseña.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta){
                swal({
                    type: "success",
                    title: "¡Cambios realizados correctamente!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if(result.value){
                        window.location.reload();
                    }
                });
            }
        });
      }
    })
  } 
);


$( "#list-personales" ).on( "click", function() {
    if($("#btn-datos-personales").hasClass("configuracion-activo")){

    }
    else{
        $( "#btn-datos-personales" ).removeClass("configuracion-no-activo");
        $( "#btn-config" ).removeClass("configuracion-activo");
        $( "#btn-config" ).addClass("configuracion-no-activo");
        $("#img-personales").attr("src","./assets/icons/usuario.png");
        $("#img-config").attr("src","./assets/icons/configuraciones.png");
        $( "#btn-datos-personales" ).addClass("configuracion-activo");
        $("#configuracion-configuracion").addClass("d-none");
        $("#configuracion-datos-personales").removeClass("d-none");
    }

    if($("#list-personales").hasClass("activo")){

    }
    else{
        $( "#list-config" ).removeClass("activo");
        $( "#list-personales" ).addClass("activo");
    }
}
);

$( "#list-config" ).on( "click", function() {
    if($("#btn-config").hasClass("configuracion-activo")){

    }
    else{
        $( "#btn-config" ).removeClass("configuracion-no-activo");
        $( "#btn-datos-personales" ).removeClass("configuracion-activo");
        $( "#btn-datos-personales" ).addClass("configuracion-no-activo");
        $("#img-personales").attr("src","./assets/icons/usuario_negro.png");
        $("#img-config").attr("src","./assets/icons/configuraciones_blanca.png");
        $( "#btn-config" ).addClass("configuracion-activo");
        $("#configuracion-datos-personales").addClass("d-none");
        $("#configuracion-configuracion").removeClass("d-none");
    }

    if($("#list-config").hasClass("activo")){

    }
    else{
        $( "#list-personales" ).removeClass("activo");
        $( "#list-config" ).addClass("activo");
    }
}
);

llenarDatos();