<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'My Perfil';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/My_perfil.css">

	<!-- MI CONTENIDO -->
	<section>
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">
				<header class="page-title">
					<div class="row">
						<div class="col-xs-12">
							<div class="container">
							    <div class="row profile">
									<div class="col-md-3">
										<div class="profile-sidebar">
											<!-- SIDEBAR USERPIC -->
											<div class="profile-userpic">
												<img src="img/2.jpg" class="img-responsive" alt="">
											</div>
											<!-- END SIDEBAR USERPIC -->
											<!-- SIDEBAR USER TITLE -->
											<div class="profile-usertitle">
												<div class="profile-usertitle-name">
													Mika 
												</div>
												<div class="profile-usertitle-job">
													Ilustradora
												</div>
											</div>
											<!-- END SIDEBAR USER TITLE -->
											<!-- SIDEBAR BUTTONS -->
											<div class="profile-userbuttons">
												<button type="button" class="btn btn-success btn-sm">Sigueme</button>
												<button type="button" class="btn btn-danger btn-sm">Mensaje</button>
											</div>
											<!-- END SIDEBAR BUTTONS -->
										</div>
									</div>
									<div class="col-md-9">
							            <div class="profile-content">
										   	<p>Acerca de mi:</p><br>
										   	<p>¡Hola amigos!</p><br>
											<p>Me encanta hablar sobre nada.</p><br>
											<p>Ejercicios, amigos, vida rutinaria, cualquier cosa ~~ heheh 
											Y me encantan las bromas muuuucho y al mismo tiempo me encanta hablar temas pesados ​​también.</p><br>
											<p>Siempre trato de ser una persona sincera y honesta. 
											así que siempre espero que la gente me recuerde de esa manera. </p><br>
											<p>Siempre hago mi mejor esfuerzo para mantener mis palabras. 
											Así que considero mucho antes de decir algo. </p><br>
											<p>ohh y voy a ser profesor, así que ahora estoy estudiando en la universidad.</p><br> 
											<p>Además, me encanta el sarcasmo, jajaja, pero básicamente soy muy amigable y amable.</p>
							            </div>
									</div>
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
