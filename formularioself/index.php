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
			<h1>Formulario self</h1>
			<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='POST'>
				<div class=''>
					<p>Usuario</p>
					<input type='text' name='user' required="required">
				</div>
				<div class=''>
					<p>Contraseña</p>
					<input type='password' name='pass1' required="required">
				</div>
				<div class=''>
					<p>Confirmar contraseña</p>
					<input type='password' name='pass2' required="required">
				</div>
				<p><div class=""><button>Enviar</button></div></p>
			</form>
			<?php 
				if (isset($_POST['pass1'])) {
				
					if ($_POST['pass1'] != $_POST['pass2']) {
						echo 'Su contraseña no coincide';
					}
					if ($_POST['pass1'] == $_POST['pass2']){
						echo 'Correcto';
					}
				}
				if (empty($_POST['pass1'])) {
					echo '';
				}
			
			?>
			
		</div>
	</body>
</html>