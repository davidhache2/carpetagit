<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset="UTF-8" />
	<title>Gasolina Verde</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
</head>
<body class="container">
	<?php include ('../randomtxt/functions.php');?>
	<section>
		<button class="btn btn-default cerrar">Cerrar sesión</button>
		<h2>Panel de control</h2>
		<form action="index.php" method="POST">
		<label for="texto1">Contenido anterior</label><br>
		<div class="resize"><?php escribir()?></div>
		<label for="texto2">Nuevo contenido</label><br>
		<textarea class="resize" name="texto2"></textarea><br>
		<input type="submit" value="Guardar cambios" class="enviar">
		</form>
	</section>
	
</body>
</html>