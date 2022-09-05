<?php

	/*=============================================
					CONTROLADORES
	=============================================*/
	require_once "controladores/plantilla.controlador.php";
	require_once "controladores/usuarios.controlador.php";
	require_once "controladores/categorias.controlador.php";
	require_once "controladores/productos.controlador.php";
	require_once "controladores/clientes.controlador.php";
	require_once "controladores/ventas.controlador.php";
	/*=============================================
					MODELOS
	=============================================*/
	//require_once "modelos/plantilla.modelos.php";
	require_once "modelos/usuarios.modelos.php";
	require_once "modelos/categorias.modelos.php";
	require_once "modelos/productos.modelos.php";
	require_once "modelos/clientes.modelos.php";
	require_once "modelos/ventas.modelos.php";
	/*=============================================
		DONDE COMIENZO A UTILIZAR CONTROLADORES
	=============================================*/

	$plantilla = new ControladorPlantilla();
	$plantilla -> ctrPlantilla();

?>

<h1>Hola mundo</h1>
