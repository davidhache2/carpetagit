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
			<h1>Formulario post</h1>
			<form action="procesar.php" method="POST">
				<div class="">
				<label for="user">Introduce tu usuario</label>
				<input type="text" name="user" required="required">
				</div>
				
				<div class="">
				<label for="date">Introduce tu fecha de nacimiento</label>
				<input type="date" name="date" required="required">
				</div>
				
				<div class="">
					<p>Indique su sexo:</p>
					<select name="sexo" required="required">
						<option value=""></option>
						<option value="hombre">Hombre</option>
						<option value="mujer">Mujer</option>
					</select>
				</div>
				
				<div class="">
					<p>Indique sus estudios:</p>
					<input type="radio" name="estudios" value="noestudios" checked="checked">No tiene estudios</input>
					<input type="radio" name="estudios" value="primarios">Primarios</input>
					<input type="radio" name="estudios" value="secundarios">Secundarios</input>
				</div>
				
				<p><input type="checkbox" name="info" checked="checked">Quiero recibir información periódicamente</input></p>
	
				<p><input type="checkbox" name="condiciones" required="required">Acepto las condiciones del servicio</input></p>
				
				<p><input type="submit" value="Enviar"></p>
			</form>
		</div>
	</body>
</html>