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
	
	echo 'Verduras: <br/>';
	if (isset($_SESSION['tomates'])) {
		echo 'Tomates <br/>';
	}
	else {
		echo '';
	}
	if (isset($_SESSION['pimientos'])) {
		echo 'Pimientos <br/>';
	}
	else {
		echo '';
	}
	if (isset($_SESSION['cebollas'])) {
		echo 'Cebollas <br/>';
	}
	else {
		echo '';
	}
	echo 'Panadería: <br/>';
	if (isset($_SESSION['chapata'])) {
		echo 'Chapata <br/>';
	}
	else {
		echo '';
	}
	if (isset($_SESSION['gallego'])) {
		echo 'Gallego <br/>';
	}
	else {
		echo '';
	}
	if (isset($_SESSION['viena'])) {
		echo 'Viena <br/>';
	}
	else {
		echo '';
	}
?>		
		</p>
		</div>
			<a href="index.php">Ir al inicio </a> o <a href="destruirsesion.php"> Cerrar sesión</a>
	</div>

<?php
include ('footer.php');
?>