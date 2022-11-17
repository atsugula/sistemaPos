<?php

require_once "../../controladores/ventas.controlador.php";
require_once "../../modelos/ventas.modelos.php";
require_once "../../controladores/clientes.controlador.php";
require_once "../../modelos/clientes.modelos.php";
require_once "../../controladores/usuarios.controlador.php";
require_once "../../modelos/usuarios.modelos.php";

$reporte = new ControladorVentas();
$reporte -> ctrDescargarReporte();

?>