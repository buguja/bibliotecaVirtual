<?php
	session_start();
	if(empty($_SESSION["alumno"]) && empty($_SESSION["admin"])){
		include_once("logout.php");
	}
?>