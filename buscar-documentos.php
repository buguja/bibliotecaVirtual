<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/index.css">
		<script src="js/index.js"></script>
		<title>Biblioteca - Buscar libro</title>
	</head>
	<body>
		<?php include_once("header.php"); ?>
		<div class="content">
			<div class="container">
				<h1 class="text-center">Buscar documentos</h1>
				<div class="full-width">
					<form action="buscar-documentos-post.php" method="post">
						<select class="flt-left" name="busquedaPor">
							<option value="nombre">Nombre del documento</option>
							<option value="especialidad">Especialidad</option>
						</select>
						<input class="flt-left" type="text" name="buscar">
						<input class="btn flt-right" type="submit" value="buscar" onclick="enviarForm(event, this, 'dinamicTable')">
					</form>
					<div id="dinamicTable"></div> <!-- cargará contenido dinámico, con ajax -->
				</div> <!-- /.section -->
			</div> <!-- /.container -->
		</div> <!-- /.content -->
		<div class="footer">
			Footer
		</div> <!-- /.footer -->
	</body>
</html>