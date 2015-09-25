<?php
	session_start();
	$menu= "<ul class='menu container'>".
		"<li><a href='.'>Inicio</a></li>";
	if($_SESSION["alumno"] === true){
		$menu.= "<li><a href='#'>Buscar</a>".
			"<ul><li><a href='buscar-libro.php'>Libro</a></li>".
			"<li><a href='buscar-tesis.php'>Tesis</a></li>".
			"<li><a href='buscar-documentos.php'>Documentos</a></li>".
			"<li><a href='buscar-enlaces.php'>Enlaces</a></li></ul></li>".
			"<li><a href='logout.php'>Cerrar sesión</a></li>";
	}
	$menu.= "</ul>";
?>
<div class="header">
	<div class="container">
		<img class="flt-left logo" src="img/logo.png">
		<div class="flt-right redes">
			<span><?php echo date("Y - m - d"); ?></span>
			<span><img src="img/redes/fb.jpg"></span>
			<span><img src="img/redes/tw.png"></span>
		</div> <!-- /.redes -->
	</div> <!-- /.container -->
	<div class="nav">
		<?php echo $menu; ?>
	</div> <!-- /.nav -->
</div> <!-- /.header -->