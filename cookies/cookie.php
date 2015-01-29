<?php 
	setcookie ('nombre','Juan');
	setcookie ('estilo','oscuro');
?>
<!DOCTYPE html>
<html  lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Enviar datos por url</title>
		<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		<?php
			var_dump($_COOKIE);
			echo $_COOKIE['nombre'];
			echo $_COOKIE['estilo'];
			
			
		?>
		</div>
	</body>
</html>