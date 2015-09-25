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
				<h3>Alta documentos</h3>
				<form action="alta-documentos-post.php" method="post">
					<input class="full-width" type="text" name="nombre" placeholder="Nombre">
					<input class="full-width" type="text" name="especialidad" placeholder="Especialidad">
					<input class="flt-right btn" type="submit" value="Registrar" onclick="enviarForm(event, this, null)">
				</form>
			</div> <!-- /.container -->
		</div> <!-- /.content -->
		<div class="footer">
			Footer
		</div> <!-- /.footer -->
	</body>
</html>