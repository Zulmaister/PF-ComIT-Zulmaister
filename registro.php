<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['enviar'])) {
	Conexion :: abrir_conexion();

	$validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave1'], $_POST['clave2'], Conexion :: obtener_conexion());

	if ($validador -> registro_valido()) {
		$usuario = new Usuario('', $validador-> obtener_nombre(),
				 $validador -> obtener_email(), 
				 password_hash($validador -> obtener_clave(), PASSWORD_DEFAULT), 
				 '', '');
		$usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);

		if ($usuario_insertado) {
			Redireccion::redirigir(RUTA_REGISTRO_CORRECTO . '?nombre=' . $usuario -> obtener_nombre());
		}
	}

	Conexion:: cerrar_conexion();
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
		<form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<?php
			if (isset($_POST['enviar'])) {
				include_once 'plantillas/registro_validado.inc.php';
			} else {
				include_once 'plantillas/registro_vacio.inc.php';
			}

			?>
		</form>
	</div>
</body>
</html>