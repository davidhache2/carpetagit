<?php
session_start();
include ('header.php');
?>
<div class="row">
	<div class="col-md-12">
		<h2>Estas son las compras que deseas</h2>
		<div class="well">
		<p>	
<?php 
foreach ($_SESSION as $clave=>$valor){
	echo "<p> Has comprado: $clave</p>";
}


?>		
		</p>
		</div>
			<a class="btn btn-success" href="index.php">Ir al inicio </a> o <a class="btn btn-success" href="destruirsesion.php"> Cerrar sesión</a>
	</div>

<?php
include ('footer.php');
?>