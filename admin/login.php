<?php
	session_start();
	$user= htmlspecialchars($_POST["user"], ENT_QUOTES);
	$pass= htmlspecialchars($_POST["pass"], ENT_QUOTES);
	
	iniciarSesion($user, $pass);
	header("Location: .");
	
/* =========== Bloque de funciones ============*/
	function iniciarSesion($user, $pass){
		if(($user == "admin") && ($pass == "admin"))
			$_SESSION["admin"]= true;
		else
			include_once("logout.php");
		/*$arrayResult= array();
		if($resultadoConsulta)
			while($row= mysqli_fetch_assoc($resultadoConsulta))
				$arrayResult[]= $row;
		echo json_encode($arrayResult);*/
	}
?>