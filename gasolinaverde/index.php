<!DOCTYPE html>
<html  lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Gasolina verde</title>
		<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="container">
				<img src="images/logo.jpg" alt="logo"/>
				<h1>Gasolina Verde</h1>
					<form method="POST" action="index.php">
						<input type="text" name="usuario" placeholder="Usuario"/>
						<input type="password" name="password" placeholder="Contraseña"/>
						<input type="button" value="Enviar"/>
						<p><input type="checkbox" name="recordar" value="recordar"/> Recordar contraseña en este equipo.</p>
					</form>
					<div class="divimg">
						<img src="images/cabeceraimg.jpg" alt="Imagen de cabecera"/>
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
			</div>
		</header>
		<!--FIN HEADER-->
		<!--INICIO MAIN-->
		<section class="container">
			<h2>Area multimedia</h2>
			<p>
				<ul>
					<li><a href="#"><img src="images/tour1.jpg" alt="tour"/></a></li>
					<li><a href="#"><img src="images/tour2.jpg" alt="tour"/></a></li>
					<li><a href="#"><img src="images/tour3.jpg" alt="tour"/></a></li>
					<li><a href="#"><img src="images/tour4.jpg" alt="tour"/></a></li>
				</ul>
			</p>
				<section>
					<p class="video">Video promocional</p>
					<video src="media/video.mp4" controls>Error de reproducción</video>
				</section>
			<p>
				<ul>
					<li><a href="#"><img src="images/tour5.jpg" alt="tour"/></a></li>
					<li><a href="#"><img src="images/tour6.jpg" alt="tour"/></a></li>
					<li><a href="#"><img src="images/tour7.jpg" alt="tour"/></a></li>
					<li><a href="#"><img src="images/tour8.jpg" alt="tour"/></a></li>
				</ul>
			</p>
		</section>
		<!-- FIN MAIN-->
		<!-- INICIO SIDEBAR -->
		<section class="container">
			<p>Libro de visitas</p>
			<p>Nº de visitas: </p>
			<form action="index.php" method="POST">
				<label for="nombre">Nombre o apodo: </label> <br/>
				<input type="text" name="nombre"/> <br/>
				<label for="comentario">Comentario: </label><br/>
				<textarea name="comentario"></textarea> <br/>
			</form>
		</section>
		<!--FIN SIDEBAR-->
		
		
		
		
		
		
		
		
		
		<!--INICIO FOOTER-->
		<footer class="container">
			<p>Página web diseñada por Juan Carlos Martinez Vazquez y David Martín Rodríguez para el grupo &copy;Gasolina verde || 2015 || Todos los derechos reservados</p>
		</footer>
		<!--FIN FOOTER-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>