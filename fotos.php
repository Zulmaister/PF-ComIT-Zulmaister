<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Fotos';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
	<link rel="stylesheet" type="text/css" href="css/fotos.css">
	<!-- MI CONTENIDO -->
	<section id="blog">
			<h3>Mis imagenes</h3>
			<div class="contenedor">
				<article>
					<img src="img/foto1.jpg">
					<h4></h4>
				</article>
				<article>
					<img src="img/foto2.jpg">
					<h4></h4>
				</article>
				<article>
					<img src="img/foto3.jpg">
					<h4></h4>
				</article>
				<article>
					<img src="img/foto4.jpg">
					<h4></h4>
				</article>
				<article>
					<img src="img/foto5.jpg">
					<h4></h4>
				</article>
				<article>
					<img src="img/foto6.jpg">
					<h4></h4>
				</article>
			</div>
	</section>

	<!-- FIN CONTENIDO -->
<?php

include_once 'plantillas/documento-cierre.inc.php';

?>
