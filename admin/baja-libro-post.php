<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");

	$isbn= $_POST["identificador"];
	$manejadorBD= new ManejadorMySql();
	
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("DELETE FROM libro WHERE isbn='". $isbn. "'");
	
	$manejadorBD->cerrarConexion();
?>