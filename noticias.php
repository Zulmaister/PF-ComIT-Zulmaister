<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Noticias';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	<link rel="stylesheet" href="css/noticias.css">  
</head>
<body>
	<!-- MI CONTENIDO -->
	<section>
			<div class="rad-body-wrapper rad-nav-min">
				<div class="container-fluid">
					<header class="page-title">
						<div class="row">
							<div class="col-xs-12">
								<div id="movie-card-list">
									<!-- Card 1: Rampage Devastación -->
									<div class="movie-card">
										<div class="color-overlay">
											<div class="movie-share">
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe87d</i>
												</a>
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe253</i>
												</a>
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe80d</i>
												</a>
											</div>
											<div class="movie-content">
												<div class="movie-header">
													<h1 class="movie-title">Rampage</h1>
													<h4 class="movie-info">(Año: 2018) Acción, Ciencia ficción, Monstruos</h4>
												</div>
												<p class="movie-desc">Lo grande se vuelve Gigante cuando un experimento genético sale mal, este apacible simio se convierte en una enorme y embravecida criatura.</p>
												<a class="btn btn-outline" href="#">Ver más</a>
											</div>
										</div>
									</div>

									<!-- Card 2: Back to the Future -->
									<div class="movie-card">
										<div class="color-overlay">
											<div class="movie-share">
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe87d</i>
												</a>
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe253</i>
												</a>
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe80d</i>
												</a>
											</div>
											<div class="movie-content">
												<div class="movie-header">
													<h1 class="movie-title">Ready Player One</h1>
													<h4 class="movie-info">(2018) Adventure, Ciencia ficción, Internet</h4>
												</div>
												<p class="movie-desc">Año 2045. A llegado el más popular utopía virtual a escala global llamada Oasis </p>
												<a class="btn btn-outline" href="#">Ver más</a>
											</div>
										</div>
									</div>

									<!-- Card 3: Akira -->
									<div class="movie-card">
										<div class="color-overlay">
											<div class="movie-share">
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe87d</i>
												</a>
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe253</i>
												</a>
												<a class="movie-share__icon" href="#">
													<i class="material-icons">&#xe80d</i>
												</a>
											</div>
											<div class="movie-content">
												<div class="movie-header">
													<h1 class="movie-title">Nanatsu no Taizai</h1>
													<h4 class="movie-info">PlayStation 4</h4>
												</div>
												<p class="movie-desc">El nuevo juego para PlayStation 4 de Nanatsu no  Taizai, lanzo su primer trailer promocional</p>
												<a class="btn btn-outline" href="#">Ver más</a>
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
</body>
<?php

include_once 'plantillas/documento-cierre.inc.php';

?>
