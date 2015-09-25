<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");

	$nombre= $_POST["identificador"];
	$manejadorBD= new ManejadorMySql();
	
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("DELETE FROM tesis WHERE nombre='". $nombre. "'"); //quisá año tambien
	
	$manejadorBD->cerrarConexion();
?>