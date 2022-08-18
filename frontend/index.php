<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/paginas.controlador.php";

require_once "models/rutas.php";
require_once "models/paginas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();