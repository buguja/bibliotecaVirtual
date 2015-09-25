<?php
	include_once("../php/ManejadorMySql.php");
	
	function obtenerDatosTabla(){
		$manejadorBD= new ManejadorMySql();
		$manejadorBD->abrirConexion();
		$rowsContent= "";
		$resultadoConsulta= $manejadorBD->realizarConsulta("SELECT matricula, nombre, apellido, semestre, carrera, correo ". 
														   "FROM alumno");
		if($resultadoConsulta)
			while($row= $resultadoConsulta->fetch_row()){
				$rowsContent.= "<tr><td>". $row[0]. "</td>";
				$rowsContent.= "<td>". $row[1]. "</td>";
				$rowsContent.= "<td>". $row[2]. "</td>";
				$rowsContent.= "<td>". $row[3]. "</td>";
				$rowsContent.= "<td>". $row[4]. "</td>";
				$rowsContent.= "<td>". $row[5]. "</td>";
				$rowsContent.= "<td class='text-center'><a href='baja-alumno-post.php' onclick='enviarDato(event, this, \"".
					$row[0]. "\");'><img src='../img/eliminar.png'></a></tr>";
			}
		$manejadorBD->cerrarConexion();
		return $rowsContent;
	}
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/index.css">
		<script src="../js/index.js"></script>
		<title>Biblioteca</title>
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<div class="content">
			<div class="container">
				<h3>Baja alumno</h3>
				<table>
					<tr>
						<th>Matrícula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Semestre</th>
						<th>Carrera</th>
						<th>Correo</th>
						<th>Acción</th>
					</tr>
					<?php echo obtenerDatosTabla(); ?>
				</table>
			</div> <!-- /.container -->
		</div> <!-- /.content -->
		<div class="footer">
			Footer
		</div> <!-- /.footer -->
	</body>
</html>