
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>


<!-- login form box -->
<form method='POST' action='index.php' class="login" name="loginform">
		<a class="registro" href="register.php">Registre una nueva cuenta</a>
		<label class="salto" for="usuario">Iniciar Sesión</label>
		<input type="text" name="user_name" required placeholder="Usuario"/>
		<input type="password" name="user_password" autocomplete="off" required placeholder="Contraseña"/>
		<input type="submit" value="Enviar" name="login">
		<div class="recordar" ><input type="checkbox"  name="recordar" value="recordar"/> Recordar contraseña en este equipo.</div>
		</form>
