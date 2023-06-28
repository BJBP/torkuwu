<?php

require_once "controllers/PlantillaController.php";

require_once "controllers/UsuariosController.php";


require_once "models/Usuario.php";
require_once "models/Tipo-Usuario.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();