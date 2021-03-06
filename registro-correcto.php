<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
	$nombre = $_GET['nombre'];	
} else {
	Redireccion :: redirigir(SERVIDOR);
}

$titulo = '¡Registro correcto!';

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <style>
    	.slider {
	background: url(../Cerook/img/Celeste.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
    </style>

</head>
  <body>
  	<section class="container-fluid slider d-flex justify-content-center align-items-center">
    	<div class="display-5">
			<div class="panel-body text-center">
			<p>Registro Correcto.</p>
			<p>¡Gracias por registrarse <b><?php echo $nombre ?></b>!</p>
				<br>
			<p><a href="<?php echo RUTA_LOGIN ?>"> Inicia sesión</a> para comenzar tu cuenta.</p>
		</div>
    </section>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>