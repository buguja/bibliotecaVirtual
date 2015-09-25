<?php
	//implementar seguridad
	include_once("../php/ManejadorMySql.php");
	$nombre= $_POST["nombre"]; //validar caracteres, evitar inyección
	$apellido= $_POST["apellido"]; //validar caracteres, evitar inyección
	$semestre= $_POST["semestre"]; //validar caracteres, evitar inyección
	$carrera= $_POST["carrera"]; //validar caracteres, evitar inyección
	$matricula= $_POST["matricula"]; //validar caracteres, evitar inyección
	$correo= $_POST["correo"]; //validar caracteres, evitar inyección
	$pass= $_POST["pass"]; //validar caracteres, evitar inyección

	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	$resultadoConsulta= $manejadorBD->realizarConsulta("INSERT INTO alumno VALUES('". $nombre. "', '". $apellido. 
													   "', ". $semestre. ", '". $carrera. "', '". $matricula. "', '". $correo.
													   "', sha1('". $pass. "'))");
	if($resultadoConsulta)
		echo "Alumno registrado";
	else
		echo "No se puede registrar al alumno";
	$manejadorBD->cerrarConexion();
?>