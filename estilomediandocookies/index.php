<?php
	$estilo='cerulean';
	if (isset($_COOKIE['estilo'])){
		$estilo=$_COOKIE['estilo'];
	}
	
	if (isset($_POST['escogestilo'])){
		setcookie('estilo', $_POST['escogestilo'], time()+(60*60*24*90));
		$estilo=$_POST['escogestilo'];
	}
?>
<!DOCTYPE html>
<html  lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Enviar datos por url</title>
		<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/<?php echo $estilo;?>/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1>Estilo mediante cookies</h1>
			<form action="index.php" method="POST">
				<select name="escogestilo">
					<option value="cerulean">Cerulean</option>
					<option value="cyborg">Cyborg</option>
					<option value="united">United</option>
				</select>
				<input type="submit" value="Aplicar">
			</form>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Estilos usando cookies</h1>
        <p class="lead">Mediante cookies podemos alterar nuestra página en base a estilos elegidos por nuestros usuarios</p>

      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Cookies</h2>
          <p>PHP soporta cookies HTTP de forma transparente. Las Cookies son un mecanismo por el cuál se almacenan datos en el browser remoto y así rastrear o identificar a usuarios que vuelven. Se pueden configurar Cookies usando la función setcookie() </p>
        </div>
        <div class="col-lg-4">
          <h2>setcookies()</h2>
          <p>setcookie() define una cookie para ser enviada junto con el resto de las cabeceras de HTTP. Al igual que otras cabeceras, las cookies deben ser enviadas antes de que el script genere ninguna salida (es una restricción del protocolo). Ésto implica que las llamadas a esta función se coloquen antes de que se genere cualquier salida, incluyendo las etiquetas <html> y <head> al igual que cualquier espacio en blanco. </p>
          
       </div>
        <div class="col-lg-4">
          <h2>Parámetros de setcookies</h2>
          <p><pre>setcookie(name, value, expire, path, domain);</pre>.</p>
          <h2>Recoger cookies</h2>
		  <p>Las cookies pueden ser recogidas mediante  $_COOKIE['']</p>
			<pre>echo "Bienvenido " . $_COOKIE["user"] . "!<br>";</pre>		  
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>© Company 2014</p>
      </div>

    </div> <!-- /container -->
	</body>
</html>