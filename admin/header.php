<?php
	session_start();
	$menu= "<ul class='menu container'>".
		"<li><a href='.'>Inicio</a></li>";
	if($_SESSION["admin"] === true){
		$menu.= "<li><a href='#'>Alta</a>". //Menu alta
			"<ul><li><a href='alta-alumno.php'>Alumno</a></li>".
			"<li><a href='alta-libro.php'>Libro</a></li>".
			"<li><a href='alta-tesis.php'>Tesis</a></li>".
			"<li><a href='alta-documentos.php'>Documentos</a></li>".
			"<li><a href='alta-enlaces.php'>Enlaces</a></li></ul></li>".
			"<li><a href='#'>Baja</a>". //Menu baja
			"<ul><li><a href='baja-alumno.php'>Alumno</a></li>".
			"<li><a href='baja-libro.php'>Libro</a></li>".
			"<li><a href='baja-tesis.php'>Tesis</a></li>".
			"<li><a href='baja-documentos.php'>Documentos</a></li>".
			"<li><a href='baja-enlaces.php'>Enlaces</a></li></ul></li>".
			"<li><a href='#'>Consulta</a>".
			"<ul><li><a href='consulta-alumno.php'>Alumno</a></li>". //Menu consulta
			"<li><a href='consulta-libro.php'>Libro</a></li>".
			"<li><a href='consulta-tesis.php'>Tesis</a></li>".
			"<li><a href='consulta-documentos.php'>Documentos</a></li>".
			"<li><a href='consulta-enlaces.php'>Enlaces</a></li></ul></li>".
			"<li><a href='logout.php'>Cerrar sesión</a></li>";
	}
	$menu.= "</ul>";
?>

<div class="header">
	<div class="container">
		<img class="flt-left logo" src="../img/logo.png">
		<div class="flt-right redes">
			<span><?php echo date("Y - m - d"); ?></span>
			<span><img src="../img/redes/fb.jpg"></span>
			<span><img src="../img/redes/tw.png"></span>
		</div> <!-- /.redes -->
	</div> <!-- /.container -->
	<div class="nav">
		<?php echo $menu; ?>
	</div> <!-- /.nav -->
</div> <!-- header -->