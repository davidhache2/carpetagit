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
<?php 
// definimos variables y establecemos por defecto los valores vacíos
$nameErr = $emailErr = $generoErr = $websiteErr = "";
$name = $email = $genero = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {//aunque el envío sea por request lo evaluamos como post
   if (empty($_POST["name"])) {
     $nameErr = "*El nombre es obligatorio";//damos un texto en caso de dejarlo vacío
   } else {
     $name = test_input($_POST["name"]);// la función test input la veremos más abajo
     // Comprobamos si el nombre contiene sólo letras y  espacios en blanco
     if (!preg_match("/^[a-záéíóúñü ]*$/i",$name)) {//preg_match() realiza una comparación con una expresión regular
       $nameErr = "*Solamente letras o espacios en blanco"; 
     }
   }
//validación de email
   if (empty($_POST["email"])) {
     $emailErr = "*El email es obligatorio";
   } else {
     $email = test_input($_POST["email"]);
     // Comprobamos si la dirección de correo electrónico está bien formada
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//filter_var  Filtra una variable con el filtro que se indique
       $emailErr = "*Dirección de email inválida"; 
     }
   }
}
// función de prevención de inyecciones
function test_input($data) {
   $data = trim($data);//elimina espacios en blanco del principio y final de la cadena
   $data = stripslashes($data);//Quita las barras de un string con comillas escapadas
   $data = htmlspecialchars($data);// Convierte caracteres especiales en entidades HTML http://php.net/manual/es/function.htmlspecialchars.php
 
   return $data;
}

?>
		<div class='container'>
			<h1>Formulario Email</h1>
			<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='POST'>
				<div class=''>
					<p>Nombre</p>
					<input class="form-control" type='text' name='name'>
					<span class="error"> <?php echo $nameErr; ?></span>
				</div>
				<div class=''>
					<p>Tu dirección de correo electrónico</p>
					<input class="form-control" type='email' name='email' >
					<span class="error"> <?php echo $emailErr; ?></span>
				</div>
				<div class=''>
					<p>Asunto</p>
					<input class="form-control" type='asunto' name='asunto' >
				</div>
				<div class=''>
					<p>Mensaje</p>
					<textarea class="form-control" name='mensaje' ></textarea>
				</div>
				<p><div class=""><button>Enviar</button></div></p>
			</form>
			<?php 
			
			
				
				if (isset($_POST['name'])) {
					if (empty($nameErr) && empty($emailErr)) {
					$nombre=$_POST['name'];
					$email=$_POST['email'];
					$asunto=$_POST['asunto'];
					$texto=$_POST['mensaje'];
					echo 'Su mensaje ha sido enviado con éxito.';
					
					$para='david.disenioweb@gmail.com';
					$titulo=$asunto;
					$mensaje=$texto;
					$cabeceras = "From: $email" . "\r\n" ."Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

					mail($para, $titulo, $mensaje, $cabeceras);

					}
				if (isset($nameErr) && isset($emailErr)) {
					echo '';
				}

				}
				if (empty($_POST['name'])) {
					echo '';
				}
			?>
			
		</div>
	</body>
</html>