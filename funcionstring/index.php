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
			<h1>Funcion String</h1>
			<?php
				function contarPalabras($texto){
					return str_word_count($texto);
				}
				function contarCaracteres($texto){
					return strlen($texto);
				}
				function subString($texto) {
					return substr ($texto ,0, 100);
				}
				function invertir($texto) {
					return strrev($texto);
				}
				function sustituir($texto) {
					return str_replace('PHP','Ruby',$texto);
				}
				function mayus($texto) {
					return str_replace('libre','LIBRE',$texto);
				}
				function stringArray($texto) {
					
				}
				
				$texto='PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.';
				echo '<br/>'.$texto.'<br/><br/>';
				echo 'El número de palabras es: '.contarPalabras($texto).'<br/><br/>';
				echo 'El número de caractéres es: '.contarCaracteres($texto).'<br/><br/>';
				echo 'Texto cortado: '.subString($texto).'...<br/><br/>';
				echo 'Texto invertido:<br/> '.invertir($texto).'<br/><br/>';
				echo 'Texto con sustitución:<br/>'.sustituir($texto).'<br/><br/>';
				echo 'Texto mayusculas<br/>'.mayus($texto).'<br/><br/>';
				
			?>
		</div>
	</body>
</html>