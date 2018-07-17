<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Amigos';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<!-- MI CONTENIDO -->

	<section id="info"> 
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">
				<header class="page-title">
					<div class="row">
						<div class="col-xs-12">
							<div class="contenedor">
								<div class="info-pet">
									<img src="img/3.jpg" alt="">
									<h4>Bret</h4>
								</div>
								<div class="info-pet">
									<img src="img/4.jpg" alt="">
									<h4>Antonette</h4>
								</div>
								<div class="info-pet">
									<img src="img/5.png" alt="">
									<h4>Tom</h4>
								</div>
								<div class="info-pet">
									<img src="img/06.jpg" alt="">
									<h4>Sam</h4>
								</div>
								<div class="info-pet">
									<img src="img/07.jpg" alt="">
									<h4>Julio</h4>
								</div>
								<div class="info-pet">
									<img src="img/08.jpg" alt="">
									<h4>Leonardo</h4>
								</div>
								<div class="info-pet">
									<img src="img/09.jpg" alt="">
									<h4>Mitsuki</h4>
								</div>
								<div class="info-pet">
									<img src="img/10.jpg" alt="">
									<h4>Smigol</h4>
								</div>
								<div class="info-pet">
									<img src="img/11.jpg" alt="">
									<h4>Azuna</h4>
								</div>
								<div class="info-pet">
									<img src="img/12.jpg" alt="">
									<h4>Cynthia</h4>
								</div>
								<div class="info-pet">
									<img src="img/13.jpg" alt="">
									<h4>Carolina</h4>
								</div>
								<div class="info-pet">
									<img src="img/14.jpg" alt="">
									<h4>Luna</h4> 
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>
		</div>
	</section>
	<!-- FIN CONTENIDO -->
<?php

include_once 'plantillas/documento-cierre.inc.php';

?>
