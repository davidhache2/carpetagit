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
				<label for="user">Introduce tu usuario</label>
				<input type="text" name="user">
				<br/>
				<br/>
				<label for="date">Introduce tu fecha de nacimiento</label>
				<input type="text" name="date">
				<br/>
				Indique su sexo:<br/>
				<select name="sexo">
					<option value="hombre">Hombre</option>
					<option value="mujer">Mujer</option>
				</select>
				<br/>
				<br/>
				Indique sus estudios:<br/>
				<input type="radio" name="estudios" value="noestudios" checked="checked">No tiene estudios</input>
				<input type="radio" name="estudios" value="primarios">Primarios</input>
				<input type="radio" name="estudios" value="secundarios">Secundarios</input>
				<br/>
				<br/>
				<input type="checkbox" name="info" checked="checked">Quiero recibir información periódicamente</input>
				<br/>
				<br/>
				<input type="checkbox" name="condiciones" required="required">Acepto las condiciones del servicio</input>
				<br/>
				<br/>
				<input type="submit" value="Enviar">
		</div>
	</body>
</html>