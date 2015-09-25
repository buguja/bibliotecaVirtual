<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");

	$url= $_POST["identificador"];
	$manejadorBD= new ManejadorMySql();
	
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("DELETE FROM enlaces WHERE url='". $url. "'");
	
	$manejadorBD->cerrarConexion();
?>