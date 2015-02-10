<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset="UTF-8" />
	<title>Gasolina Verde</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body class="container">
<!-- Inicio header -->
<header>
		<img src="images/logo.jpg" class="logo" alt="logo"/>
		<div class="titulo">
		<h1>Gasolina Verde</h1>
	<?php
		if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Lo sentimos, Simple Login PHP no se ejecuta en una versión PHP menor que 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once("libraries/password_compatibility_library.php");
}

require_once("config/db.php");

require_once("classes/Login.php");

$login = new Login();
if ($login->isUserLoggedIn() == true) {
    include("views/logged_in.php");

} else {
    include("views/not_logged_in.php");
}
?>

		<p class="dinamico">
		<?php
		include 'randomtxt/functions.php';
		randomtxt();
		?>
		</p>
		</div>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Historia</a></li>
				<li><a href="#">Discografía</a></li>
				<li><a href="#">Tour</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
</header>	
<!-- Fin header-->
<!-- Inicio main-->
	<section  id="bloque">
	<section class="sectionvideo">
	<h2 class="video">Video Promocional</h2>
	<video src="media/domingoresaka.mp4" controls>Error de Reproducción</video>
	</section>
	<h2 class="multimedia">Area Multimedia</h2>
	<div>
		<ul class="galeria">
		<li><a href="images/tour1.jpg"><img src="images/thumbnails/tour1.jpg" alt="tour"/></a></li>
		<li><a href="images/tour2.jpg"><img src="images/thumbnails/tour2.jpg" alt="tour"/></a></li>
		<li><a href="images/tour3.jpg"><img src="images/thumbnails/tour3.jpg" alt="tour"/></a></li>
		<li><a href="images/tour4.jpg"><img src="images/thumbnails/tour4.jpg" alt="tour"/></a></li>
		<li><a href="images/tour5.jpg"><img src="images/thumbnails/tour5.jpg" alt="tour"/></a></li>
		<li><a href="images/tour6.jpg"><img src="images/thumbnails/tour6.jpg" alt="tour"/></a></li>
		<li><a href="images/tour7.jpg"><img src="images/thumbnails/tour7.jpg" alt="tour"/></a></li>
		<li><a href="images/tour8.jpg"><img src="images/thumbnails/tour8.jpg" alt="tour"/></a></li>
		</ul>
	</div>
	</section>
<!--Fin Main-->
<!--Inicio Sidebar-->
	<section>
	<h2>Libro de Visitas</h2>
		<form action="index.php" method="POST">
		<label for="nombre">Nombre o ápodo</label><br>
		<input type="text" name="nombre"><br>
		<label for="comentario">Comentario</label><br>
		<textarea id="noresize"name="comentario"></textarea><br>
		<input type="submit" value="Publicar"class="enviar">
		</form>
		
	</section>
<!--Fin Sidebar -->	
	<section id="comentarios">
		<div class="visitas">Nº de visitas: <span><?php visitas();?></span></div>
		<h2>Comentarios</h2>
		<div class="datos">
		<?php comentarios();?> 
		<hr>
		</div>	
	</section>	

<!--Fin Footer -->	
	<footer>
	<ul class="contact">
			<li><a href="https://twitter.com"/> <img src="images/iconos/twitter.png"/><span class="label">Twitter</span></a></li>
			<li><a href="https://es.linkedin.com"/> <img src="images/iconos/linkedin.png"/><span class="label">Linkedin</span></a></li>
			<li><a href="https://es-es.facebook.com/"/> <img src="images/iconos/facebook.png"/><span class="label">Facebook</span></a></li>
			<li><a href="https://es.pinterest.com/"/> <img src="images/iconos/pinterest.png"/><span class="label">Pinterest</span></a></li>
			<li><a href="https://www.youtube.com"/> <img src="images/iconos/youtube.png"/><span class="label">Youtube</span></a></li>
	</ul>
	<p>Página web diseñada por <strong>David Martín Rodríguez</strong> y <strong> Juan Carlos Martínez Vázquez</strong> para el grupo <strong>&copy; Gasolina Verde</strong> ||2015|| @Todos los derechos reservados. </p>
	</footer>
</body>
</html>