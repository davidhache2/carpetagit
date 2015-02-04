<!DOCTYPE html>
<html  lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Gasolina verde</title>
		<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<header class="container">
			<img class="logo" src="images/logo.jpg" alt="logo"/>
			<div class="titulo">
					<h1>Gasolina Verde</h1>
					
					<form method="POST" action="index.php" class="login">
						<label class="salto" for="usuario">Iniciar sesión</label>
						<input type="text" name="usuario" placeholder="Usuario"/>
						<input type="password" name="password" placeholder="Contraseña"/>
						<input type="button" value="Enviar"/>
						<div class="recordar"><input type="checkbox" name="recordar" value="recordar"/> Recordar contraseña en este equipo.</div>
					</form>
					<p class="dinamico">Frase aleatoria de Gasolina Verde</p>
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
		<!--FIN HEADER-->
		<!--INICIO MAIN-->
		<section class="container">
			<section class="sectionvideo">
					<h2 class="video">Video promocional</h2>
					<video src="media/domingoresaka.mp4" controls>Error de reproducción</video>
				</section>
			<h2 class="multimedia">Area multimedia</h2>
			
			<p>
				<ul class="galeria">
					<li><a href="images/tour1.jpg"><img src="images/thumbnails/tour1.jpg" alt="tour"/></a></li>
					<li><a href="images/tour2.jpg"><img src="images/thumbnails/tour2.jpg" alt="tour"/></a></li>
					<li><a href="images/tour3.jpg"><img src="images/thumbnails/tour3.jpg" alt="tour"/></a></li>
					<li><a href="images/tour4.jpg"><img src="images/thumbnails/tour4.jpg" alt="tour"/></a></li>
				</ul>
			</p>
				
			<p>
				<ul class="galeria">
					<li><a href="images/tour5.jpg"><img src="images/thumbnails/tour5.jpg" alt="tour"/></a></li>
					<li><a href="images/tour6.jpg"><img src="images/thumbnails/tour6.jpg" alt="tour"/></a></li>
					<li><a href="images/tour7.jpg"><img src="images/thumbnails/tour7.jpg" alt="tour"/></a></li>
					<li><a href="images/tour8.jpg"><img src="images/thumbnails/tour8.jpg" alt="tour"/></a></li>
				</ul>
			</p>
		</section>
		<!-- FIN MAIN-->
		<!-- INICIO SIDEBAR -->
		<section class="container">
			<h2>Libro de visitas</h2>
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
			<p>Página web diseñada por Juan Carlos Martinez Vazquez y David Martín Rodríguez para el grupo &copy;Gasolina verde || 2015 || @Todos los derechos reservados.</p>
		</footer>
		<!--FIN FOOTER-->
	</body>
</html>