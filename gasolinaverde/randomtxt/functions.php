<?php
function randomtxt(){
	$mensajes= file('randomtxt/random.txt');
	//var_dump($mensajes);
$todo=(count($mensajes)-1);
$num=rand(0,$todo);
echo $mensajes[$num];
}

	function procesarcomentarios(){
		if(isset($_POST['nombre']) && isset($_POST['comentario'])){
			$comescrito = $_POST['comentario']."\r\n".$_POST['nombre']." dijo: \r\n";
			$agregar = $comescrito."\r\n";
			$miArchivo = fopen('randomtxt/comentarios.txt','a+') or die ('No se ha podido abrir el archivo en modo agregar');
			fwrite($miArchivo,$agregar) or die ('No se ha podido agregar su comentario');
			fclose($miArchivo);
		}
		if (file_exists('randomtxt/comentarios.txt')){
		$imprimirarchivo = file('randomtxt/comentarios.txt') or die ('No se ha podido abrir el archivo');
		foreach(array_reverse($imprimirarchivo) as $numfila=>$fila){
			echo "<p>".$fila."</p>";
		}
	}
	}

function visitas() {
$fp = fopen("contador.txt","r"); // Abrimos el fichero donde guardaremos y leeremos las visitas 

$visitas = intval(fgets($fp)); // Leemos las visitas y usamos intval para asegurarnos de que devuelve un entero

$visitas++; // Incrementamos las visitas

fclose($fp); // Cerramos el archivo pues lo vamos a volver a abrir en modo escritura

$fp = fopen("contador.txt","w"); // Abrimos el archivo en modo escritura

fputs($fp,$visitas); // Escribimos las visitas sumadas

echo $visitas; // Mostramos las visitas 
}

function escribir() {
	$comments=fopen('../randomtxt/comentarios.txt',"r");
}

?>


