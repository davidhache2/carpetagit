<?php
session_start();
include ('header.php');
?>
<div class="row">
	<div class="col-md-12">
		<h2>Carrito de compra</h2>
		<div class="well">
		<p></p>
		</div>
		
		<form name="acceso" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<fieldset>
				<legend>Seleccione lo que le guste: </legend>
				<div class='form-group'>
					<label for='chapata'> Chapata</label>
					<input type="checkbox" name="chapata">
				</div>
				<div class='form-group'>
					<label for='gallego'> Gallego</label>
					<input type="checkbox" name="gallego">
				</div>
				<div class='form-group'>
					<label for='viena'> Viena</label>
					<input type="checkbox" name="viena">
				</div>
				<input class='btn btn-primary' type="submit" value="Seleccionar">
			</fieldset>
			<a href="finalizar.php">Finalizar compra</a>
		</form>
	</div>
<?php
		if (isset($_POST['chapata'])) {
			$_SESSION['chapata']=$_POST['chapata'];
		}
		if (isset($_POST['gallego'])) {
			$_SESSION['gallego']=$_POST['gallego'];
		}
		if (isset($_POST['viena'])) {
			$_SESSION['viena']=$_POST['viena'];
		}
		else {
			echo '';
		}
?>
</div>

<?php
include ('footer.php')
?>