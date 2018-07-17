<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorLogin.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (ControlSesion::sesion_iniciada()){
	Redireccion::redirigir(SERVIDOR);
}

if (isset($_POST['login'])) {
	Conexion::abrir_conexion();

	$validador = new ValidadorLogin($_POST['email'], $_POST['clave'], Conexion::obtener_conexion());

	if ($validador -> obtener_error() === '' &&
			!is_null($validador -> obtener_usuario())) {
		ControlSesion::iniciar_sesion(
				$validador -> obtener_usuario() -> obtener_id(),
				$validador -> obtener_usuario() -> obtener_nombre());
		Redireccion::redirigir(SERVIDOR);
	}

	Conexion::cerrar_conexion();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/registro.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="form">
		<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<h2>Sign In</h2>
			<div class="input-box">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="email" placeholder="Email" 
					<?php  
					if (isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])) {
						echo 'value="' . $_POST['email'] . '"';
					}
					?>
				required="" autofocus="">
			</div>
			<div class="input-box">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<input type="password" name="clave" placeholder="Password" required="">
			</div>
			<?php
			if (isset($_POST['login'])) {
				$validador -> mostrar_error();
			}
			?>
			<div class="input-box">
				<input type="submit" name="login" value="Login">
			</div>
			<a href="#">¿Olvidaste tu contraseña?</a>
			<a href="registro.php">Registro</a>
		</form>
	</div>
</body>
</html>