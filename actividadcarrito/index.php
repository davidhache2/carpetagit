<?php
session_start();
include ('header.php');
?>
<div class="row">
	<div class="col-md-12">
		<h2>Carrito de compra</h2>
		<div class="well">
		<p>
		
		<form name="acceso" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<fieldset>
				<legend>Seleccione lo que le guste: </legend>
				<div class='form-group'>
					<label for='tomates'> Tomates</label>
					<input type="checkbox" name="tomates">
				</div>
				<div class='form-group'>
					<label for='pimientos'> Pimientos</label>
					<input type="checkbox" name="pimientos">
				</div>
				<div class='form-group'>	
					<label for='cebollas'> Cebollas</label>
					<input type="checkbox" name="cebollas">
				</div>
				</p>
		</div>
				<input class='btn btn-primary' type="submit" value="Seleccionar">
				<p>
					
				</p>
			</fieldset>
			<a class="btn btn-success" href="panaderia.php">Ir a Panadería</a> o <a class="btn btn-success" href="destruirsesion.php"> Cerrar sesión</a>
		</form>
	</div>
	<?php
		if (isset($_POST['tomates'])) {
			$_SESSION['tomates']=$_POST['tomates'];
		}
		if (isset($_POST['pimientos'])) {
			$_SESSION['pimientos']=$_POST['pimientos'];
		}
		if (isset($_POST['cebollas'])) {
			$_SESSION['cebollas']=$_POST['cebollas'];
		}
		else {
			echo '';
		}
	?>
</div>

<?php
include ('footer.php')
?>