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
<?php include ("../randomtxt/functions.php");?> 
<section>
<a href="../index.php?logout"><button class="btn btn-default cerrar">Cerrar Sesión</button></a>
	<h2>Panel de Control</h2>
		<form action="index.php" method="POST">
		<label for="texto1">Comentarios Antiguos</label><br>
		<div class="resize"><?php escribir() ?></div>
		<name="texto1"></div><br>
		<label for="texto2">Comentarios Nuevos</label><br>
		<textarea class="resize" name="texto2"></textarea><br>
		<input type="submit" value="Guardar cambios"class="enviar">
		</form>
</section>
	
</body>
</html>