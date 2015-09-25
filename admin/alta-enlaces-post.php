<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");
	$nombre= $_POST["nombre"]; //validar caracteres, evitar inyección
	$url= $_POST["url"]; //validar caracteres, evitar inyección
	$especialidad= $_POST["especialidad"]; //validar caracteres, evitar inyección

	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("INSERT INTO enlaces VALUES('". $nombre. "', '". $url. "', '".
													   $especialidad. "')");
	if($resultadoConsulta)
		echo "Enlace registrado";
	else
		echo "No se puede registrar el enlace";
	$manejadorBD->cerrarConexion();
?>