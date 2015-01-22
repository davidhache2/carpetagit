<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<title>formulario contacto por email</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	<div class="container">
	<h1>Formulario de Contacto</h1>
		<div class="col-md-6">
		<form  action=" <?php echo $_SERVER['PHP_SELF']?>" method="POST">
			<fieldset>
				<div class="form-group">
					<label for="nombre">Nombre:</label>
					<input  class="form-control" type="text" name="nombre" required>
				</div>
				<div class="form-group">
					<label for="mail">Email:</label>
					<input class="form-control" type="text" name="email" required>
				</div>
				<div class="form-group">
					<label for="asunto">Asunto</label>
					<input class="form-control" type="text" name="asunto" required>
				</div>
				<div class="form-group">
					<label for="mensaje">Escribe tu mensaje</label>
					<textarea class="form-control" name="mensaje"></textarea>
				</div>
				<button class='btn btn-primary' type='submit'>enviar</button>

			</fieldset>
		</form>
		</div>
		
		<div class="col-md-6">
		<?php
		
		// Asignamos una cadena vacía a las variables para que el formulario esté limpio
			// $nombre=$de=$asunto=$mensaje='';
			if(isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['asunto'])&&isset($_POST['mensaje'])){
			// Recogemos los valores  del formulario
				$nombre = $_POST['nombre'];
				$para= 'canodelacuadra@gmail.com';
				$de= $_POST['email'];
				$asunto='Un mensaje de ' .$nombre." sobre: ".$_POST['asunto'];
				$mensaje= $_POST['email'].': <br>'.$_POST['mensaje'];
				$cabeceras = 'From:'.$nombre.  
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
				//echo var_dump($_POST);
				
			// enviamos un email	
				$envio=mail($para, $asunto, $mensaje,$cabeceras);
				if($envio){
					echo '<div class="well"><p>Su mensaje se ha realizado con éxito.</p><p>En breve le contestaremos</p></div>';
					
				}
				else {
					echo 'Houston tenemos un problema, intentalo mas tarde.';
				}
			}
			
			
		 ?>
		 </div>
		</div>
	</body>
</html>