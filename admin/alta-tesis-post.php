<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");
	$nombre= $_POST["nombre"]; //validar caracteres, evitar inyección
	$annio= $_POST["annio"]; //validar caracteres, evitar inyección
	$especialidad= $_POST["especialidad"]; //validar caracteres, evitar inyección

	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("INSERT INTO tesis VALUES('". $nombre. "', '". $annio. 
													   "', '". $especialidad. "')");
	if($resultadoConsulta)
		echo "Tesis registrado";
	else
		echo "No se puede registrar la tesis";
	$manejadorBD->cerrarConexion();
?>