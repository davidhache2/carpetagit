<!DOCTYPE html>
<html  lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Enviar datos por POST</title>
		<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
<?php 
	$usuario=$_POST['user'];
	$fecha=$_POST['date'];
	$sexo=$_POST['sexo'];
	$estudios=$_POST['estudios'];
	$condiciones=$_POST['condiciones'];
	
	if ($estudios=='noestudios') {
		$mensaje='no tienes estudios';
	}
	
	if ($estudios=='primarios') {
		$mensaje='tienes estudios primarios';
	}
	
	if ($estudios=='secundarios') {
		$mensaje='tienes estudios secundarios';
	}
	
	if (isset($_POST['info'])) {
		$infor='deseas recibir informacion';
	}
	
	if (empty($_POST['info'])) {
		$infor='no deseas recibir informacion';
	}
	
	echo "Hola $usuario, naciste el $fecha, eres $sexo, $mensaje y $infor.";?>
			
			</div>
	</body>
</html>
	
	
