<?php
	
	require_once "config/config.php";
	require_once "core/routes.php";
	require_once "config/database.php";
	require_once "controllers/Roles.php";
	require_once "controllers/Empleados.php";
	require_once "controllers/Pacientes.php";
	require_once "controllers/Historiales.php";
	require_once "controllers/Doctores.php";
	require_once "controllers/Especialidades.php";
	require_once "controllers/Clientes.php";
	require_once "controllers/Habitaciones.php";
	require_once "controllers/Pacxhabitaciones.php";
	require_once "controllers/Farmacia.php";
	require_once "controllers/Inicioempleados.php";
	require_once "controllers/Inicio.php";
	require_once "controllers/Iniciofarmacia.php";

	
	if(isset($_GET['c'])){
		
		$controlador = cargarControlador($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['id'])){
				cargarAccion($controlador, $_GET['a'], $_GET['id']);
				} else {
				cargarAccion($controlador, $_GET['a']);
			}
			} else {
			cargarAccion($controlador, ACCION_PRINCIPAL);
		}
		
		} else {
		
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}
?>