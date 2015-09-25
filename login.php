<?php
	include_once("php/ManejadorMySql.php");

	session_start();
	$user= htmlspecialchars($_POST["user"], ENT_QUOTES);
	$pass= htmlspecialchars($_POST["pass"], ENT_QUOTES);
	
	iniciarSesion($user, $pass);
	header("Location: .");
	
/* =========== Bloque de funciones ============*/
	function iniciarSesion($user, $pass){
		$manejadorBD= new ManejadorMySql();
		$manejadorBD->abrirConexion();
		$resultadoConsulta= $manejadorBD->realizarConsulta("SELECT  matricula FROM alumno ".
														   "WHERE matricula='". $user. "' and password= sha1('". $pass. "')");
		if(mysqli_num_rows($resultadoConsulta) > 0)
			$_SESSION["alumno"]= true;
		else
			include_once("logout.php");
		$manejadorBD->cerrarConexion();
		/*$arrayResult= array();
		if($resultadoConsulta)
			while($row= mysqli_fetch_assoc($resultadoConsulta))
				$arrayResult[]= $row;
		echo json_encode($arrayResult);*/
	}
?>