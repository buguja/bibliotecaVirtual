<?php
	//implementar seguridad
	
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
				<h3>Alta alumno</h3>
				<form action="alta-alumno-post.php" method="post">
					<input class="full-width" type="text" name="nombre" placeholder="Nombre">
					<input class="full-width" type="text" name="apellido" placeholder="Apellidos">
					<input class="full-width" type="text" name="semestre" placeholder="Semestre">
					<input class="full-width" type="text" name="carrera" placeholder="Carrera">
					<input class="full-width" type="text" name="matricula" placeholder="Matricula">
					<input class="full-width" type="text" name="correo" placeholder="Correo">
					<input class="full-width" type="password" name="pass" placeholder="Contraseña">
					<input class="flt-right btn" type="submit" value="Registrar" onclick="enviarForm(event, this, null)">
				</form>
			</div> <!-- /.container -->
		</div> <!-- /.content -->
		<div class="footer">
			Footer
		</div> <!-- /.footer -->
	</body>
</html>