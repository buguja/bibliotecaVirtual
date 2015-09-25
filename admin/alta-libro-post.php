<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");
	$isbn= $_POST["isbn"]; //validar caracteres, evitar inyección
	$autor= $_POST["autor"]; //validar caracteres, evitar inyección
	$nombre= $_POST["nombre"]; //validar caracteres, evitar inyección
	$especialidad= $_POST["especialidad"]; //validar caracteres, evitar inyección

	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("INSERT INTO libro VALUES('". $isbn. "', '". $autor. 
													   "', '". $nombre. "', '". $especialidad. "')");
	if($resultadoConsulta)
		echo "Libro registrado";
	else
		echo "No se puede registrar el libro";
	$manejadorBD->cerrarConexion();
?>