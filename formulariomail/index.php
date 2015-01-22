<!DOCTYPE html>
<html  lang='es'>
	<head>
		<meta charset='utf-8'>
		<title>Enviar datos por url</title>
		<meta charset='utf-8' >
		<link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' rel='stylesheet'>
		<link href='//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css' rel='stylesheet'>
	</head>
	<body>
		<div class='container'>
			<h1>Formulario Email</h1>
			<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='POST'>
				<div class=''>
					<p>Nombre</p>
					<input class="form-control" type='text' name='nombre' required="required">
				</div>
				<div class=''>
					<p>Tu dirección de correo electrónico</p>
					<input class="form-control" type='email' name='correo' required="required">
				</div>
				<div class=''>
					<p>Asunto</p>
					<input class="form-control" type='asunto' name='asunto' required="required">
				</div>
				<div class=''>
					<p>Mensaje</p>
					<textarea class="form-control" name='mensaje' required="required"></textarea>
				</div>
				<p><div class=""><button>Enviar</button></div></p>
			</form>
			<?PHP 
				if (isset($_POST['nombre'])) {
					$nombre=$_POST['nombre'];
					$correo=$_POST['correo'];
					$asunto=$_POST['asunto'];
					$texto=$_POST['mensaje'];
					echo 'Su mensaje ha sido enviado con éxito.';
					
					$para='david.disenioweb@gmail.com';
					$titulo=$asunto;
					$mensaje=$texto;
					$cabeceras = "From: $correo" . "\r\n" ."Reply-To: $correo" . "\r\n" . "X-Mailer: PHP/" . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

				}
				if (empty($_POST['nombre'])) {
					echo '';
				}
			?>
			
		</div>
	</body>
</html>