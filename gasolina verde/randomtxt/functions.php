<?php
function randomtxt(){
	$mensajes= file('randomtxt/random.txt');
	//var_dump($mensajes);
$todo=(count($mensajes)-1);
$num=rand(0,$todo);
echo $mensajes[$num];
}
?>

<?php

	function comentarios(){
		if(isset($_POST['nombre']) && isset($_POST['comentario'])){
			$comescrito = $_POST['comentario']."\r\n".$_POST['nombre']." dijo: \r\n";
			$agregar = $comescrito."\r\n";
			$miArchivo = fopen('randomtxt/comentarios.txt','a+') or die ('No se ha podido abrir el archivo en modo agregar');			
			fwrite($miArchivo,$agregar) or die ('No se ha podido agregar su comentario');
			fclose($miArchivo);
		}
		if(file_exists('randomtxt/comentarios.txt')){
		$imprimirarchivo = file('randomtxt/comentarios.txt') or die ('No se ha podido abrir el archivo');
		foreach(array_reverse($imprimirarchivo) as $numfila=>$fila){		
			echo "<p>".$fila."</p>";
		}
 }
}
?>

<?php
function visitas(){
$fp = fopen("contador.txt","r"); 

$visitas = intval(fgets($fp));

$visitas++; 

fclose($fp); 

$fp = fopen("contador.txt","w"); 

fputs($fp,$visitas); 

echo $visitas; }

?>
<?php
function escribir(){
$imprimirarchivo = file('../randomtxt/comentarios.txt') or die ('No se ha podido abrir el archivo');
		foreach(array_reverse($imprimirarchivo) as $numfila=>$fila){		
		echo "<p>".$fila."</p>";
		}
}
?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			