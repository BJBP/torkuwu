<?php

session_destroy();

echo '<script>
	swal({
		type: "success",
		title: "¡Gracias por su preferencia, vuelva pronto!",
		showConfirmButton: true,
		confirmButtonText: "Cerrar"
	}).then(function(result){
		if(result.value){
			window.location = "index.php?ruta=login";
		}
	});
	</script>';