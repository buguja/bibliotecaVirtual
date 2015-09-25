<?php
	include_once("php/ManejadorMySql.php");
	$busquedaPor= $_POST["busquedaPor"];
	$buscar= $_POST["buscar"];
	
	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	$rowsContent= "";
	$resultadoConsulta= $manejadorBD->realizarConsulta("SELECT nombre, especialidad FROM documentos WHERE ".
													   $busquedaPor. " LIKE '%". $buscar. "%'");
	$resultTbl= "";
	if($resultadoConsulta)
		while($row= $resultadoConsulta->fetch_row()){
			$resultTbl.= "<tr><td>". $row[0]. "</td>";
			$resultTbl.= "<td>". $row[1]. "</td></tr>";
		}
	$manejadorBD->cerrarConexion();

	if(empty($resultTbl))
		echo "";
	else
		echo "<table><tr><th>Nombre</th><th>Especialidad</th></tr>".
			$resultTbl. "</table>";
?>