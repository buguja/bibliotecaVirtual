<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");

	$matricula= $_POST["identificador"];
	$manejadorBD= new ManejadorMySql();

	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("DELETE FROM alumno WHERE matricula='". $matricula. "'");

	$manejadorBD->cerrarConexion();
?>