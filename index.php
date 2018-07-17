<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Cerook';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
	<!-- MI CONTENIDO -->
	<section>
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">
				<header class="rad-page-title">
					<div class="row">
						<div class="col-xs-12">
							<div class="post">
							    <div class="post-head"><img src="img/10.jpg"/>
							        <div class="info"><span><a href="#">Smigol</a></span><span>Julio 16 a las 22:05 p.m</span></div>
							   	</div>
							    <div class="post-content">
							        <p>Mi precioso</p><img src="img/post5.jpg"/>
							    </div>
							    <div class="post-foot">
							      	<div class="social">
							          <div class="fa fa-thumbs-up"></div><span>280 Me gusta</span>
							          <div class="fa fa-comment"></div><span></span>
							        </div>
							        <div class="comment">
							        	<div class="post-content">
							       			<p>Jose jaja </p>
							        		<p>kobe02 Muy bueno</p>
							        		<p>adric235 jajaja</p> 
							   			</div>
							          <input type="text" placeholder="Añade un comentario..."/>
							        </div>
							    </div>
							</div>
							<div class="post">
							    <div class="post-head"><img src="img/06.jpg"/>
							        <div class="info"><span><a href="#">Sam</a></span><span>Julio 16 a las 21:46 p.m</span></div>
							   	</div>
							    <div class="post-content">
							        <p></p><img src="img/post1.jpg"/>
							    </div>
							    <div class="post-foot">
							      	<div class="social">
							          <div class="fa fa-thumbs-up"></div><span>13.280 Me gusta</span>
							          <div class="fa fa-comment"></div><span></span>
							        </div>
							        <div class="comment">
							        	<div class="post-content">
							       			<p>isidro_mecatronico_atomotriz Exelente</p>
							        		<p>Angela_902 Hermosa imagen</p>
							        		<p>Nic_12 estupenda imagen para el fondo de pantalla</p> 
							        		<p>pokerlife0 muy bueno</p>
							   			</div>
							          <input type="text" placeholder="Añade un comentario..."/>
							        </div>
							    </div>
							</div>
							<div class="post">
							    <div class="post-head"><img src="img/4.jpg"/>
							        <div class="info"><span><a href="#">Antonette</a><span></span></span><span>Julio 15 a las 15:45 p.m</span></div>
							    </div>
							    <div class="post-content">
							        <p>Tomando fotos con mi cámara nueva</p>
							        <img src="img/post4.jpeg" width="50%" />
							    </div>
							    <div class="post-foot">
							        <div class="social">
							          <div class="fa fa-thumbs-up"></div><span>5.173 Me gusta</span>
							          <div class="fa fa-comment"></div><span></span>
							        </div>
							        <div class="post-content">
							        	<p>freddydiaz201 Hermosa foto</p>
							        	<p>rewsall No existen palabras que describan la bella fotografia</p>
									</div>
							        <div class="comment">
							          <input type="text" placeholder="Añade un comentario..."/>
							        </div>
							   	</div>
							</div>
							<div class="post">
							    <div class="post-head"><img src="img/11.jpg"/>
							        <div class="info"><span><a href="#">Azuna</a><span></span></span><span>Julio 15 at 11:30 a.m</span></div>
							    </div>
							    <div class="post-content">
							    <p>Exhibiendo mi trabajo</p>
							    <img src="img/post6.jpg"/></div>
							    <div class="post-foot">
							        <div class="social">
							          <div class="fa fa-thumbs-up"></div><span>439 Me gusta</span>
							          <div class="fa fa-comment"></div><span></span>
							        </div>
							        <div class="comment">
							          <input type="text" placeholder="Añade un comentario..."/>
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
