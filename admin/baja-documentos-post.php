<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");

	$nombre= $_POST["identificador"];
	$manejadorBD= new ManejadorMySql();

	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("DELETE FROM documentos WHERE nombre='". $nombre. "'");

	$manejadorBD->cerrarConexion();
?>