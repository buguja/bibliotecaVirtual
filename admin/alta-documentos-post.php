<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");
	$nombre= $_POST["nombre"]; //validar caracteres, evitar inyección
	$especialidad= $_POST["especialidad"]; //validar caracteres, evitar inyección

	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("INSERT INTO documentos VALUES('". $nombre. "', '". $especialidad. "')");
	if($resultadoConsulta)
		echo "Documento registrado";
	else
		echo "No se puede registrar la documento";
	$manejadorBD->cerrarConexion();
?>