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
				<h3>Inicio de sesión</h3>
				<form action="login.php" method="post">
					<input class="full-width" type="text" name="user">
					<input class="full-width" type="password" name="pass">
					<input class="btn flt-right" type="submit">
				</form>
			</div> <!-- /.container -->
		</div> <!-- /.content -->
		<div class="footer">
			Footer
		</div> <!-- /.footer -->
	</body>
</html>