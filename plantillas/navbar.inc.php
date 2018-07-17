<?php

include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';

Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion());
Conexion :: cerrar_conexion();

?>
	<!-- MENU -->
	<section>
		<header>
			<nav class="rad-navigation">
				<div class="rad-logo-container rad-nav-min">
					<a href="https://translate.google.com/?hl=es" class="rad-logo">Cerook</a>
					<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
				</div>
				<a href="#" class="rad-logo-hidden">Cerook</a>
				<div class="rad-top-nav-container">
					<a href="" class="brand-icon"><i class="fa fa-recycle"></i></a>
					<ul class="pull-right links">
						<li class="rad-dropdown no-color">
							<a class="rad-menu-item" href="#"><img class="rad-list-img sm-img" src="img/2.jpg" alt="me" /></a>
							<ul class="rad-dropmenu-item sm-menu">
								<li class="rad-notification-item">
									<a href="rad-notification-content lg-text" href="#"><i class="fa fa-user"></i>
									<?php
									if (ControlSesion::sesion_iniciada()) {	
									?>
									<?php echo ' ' . $_SESSION['nombre_usuario']; 

									 } else {

									 }
									?>
									</a>
								</li>
								<li class="rad-notification-item">
									<a class="rad-notification-content lg-text" href="My_perfil.php"><i class="fa fa-edit"></i> My Perfil</a>
								</li>
								<li class="rad-notification-item">
									<a class="rad-notification-content lg-text" href="<?php echo RUTA_REGISTRO; ?>"><i class="fa fa-power-off"></i> Sign out</a>
								</li>
							</ul>
						</li>
						<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-cog"></i></a>
							<ul class="rad-dropmenu-item rad-settings">
								<li class="rad-dropmenu-header"><a href="#">Configuración</a></li>
								<li class="rad-notification-item text-left">
									<div class="pull-left"><i class="fa fa-link"></i></div>
									<div class="pull-right">
										<label class="rad-chk-pin pull-right">
											<input type="checkbox" /><span></span></label>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Cambiar Tema</div>
									</div>
								</li>
								<li id="rad-color-opts" class="rad-notification-item text-left hide">
									<div class="pull-left"><i class="fa fa-puzzle-piece"></i></div>
									<div class="pull-right">
										<div class="rad-color-swatch">
											<label class="colors rad-bg-crimson rad-option-selected">
												<input type="radio" checked name="color" value="crimson" />
											</label>
											<label class="colors rad-bg-teal">
												<input type="radio" name="color" value="teal" />
											</label>
											<label class="colors rad-bg-purple">
												<input type="radio" name="color" value="purple">
											</label>
											<label class="colors rad-bg-orange">
												<input type="radio" name="color" value="orange" />
											</label>
											<label class="colors rad-bg-twitter">
												<input type="radio" name="color" value="twitter" />
											</label>
										</div>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Elige un color</div>
										<div class="sm-text">Hazlo colorido</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="pull-right links">
						<li>
							<a class="rad-menu-item" href="#">
								<i class="fa fa-user">
									<span class="rad-menu-badge rad-bg-success">
										<?php 
										echo $total_usuarios
										 ?>
									</span>
								</i>
							</a>
						</li> 
						<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-open"><span class="rad-menu-badge rad-bg-primary">23</span></i></a>
							<ul class="rad-dropmenu-item">
								<li class="rad-dropmenu-header"><a href="#">Nuevo Mensaje</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="mensajes.php">
										<div class="rad-notification-body">
											<div class="lg-text">Enviar mensaje</div>
										</div>
									</a>
								</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="mensajes.php">
										<div class="rad-notification-body">
											<div class="lg-text">Reciente</div>
										</div>
									</a>
								</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="mensajes.php">
										<div class="rad-notification-body">
											<div class="lg-text">Ver todo</div>
										</div>
									</a>
								</li>
								<li class="rad-dropmenu-footer"><a href="#">Marcar todo como leido</a></li>
							</ul>
						</li>
						<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell"><span class="rad-menu-badge">10</span></i></a>
							<ul class="rad-dropmenu-item">
								<li class="rad-dropmenu-header"><a href="#">Notificaciones</a></li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="#">
										<div class="rad-notification-body">
											<div class="lg-text">Marcar todas como leidas</div>
											<div class="sm-text">10 mensajes</div>
											<em class="pull-right sm-text">2 sec jun</em>
										</div>
									</a>
								</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="#">
										<div class="rad-notification-body">
											<div class="lg-text">Nuevas</div>
											<div class="sm-text">7 mensajes</div>
											<em class="pull-right sm-text">49 mins jun</em>
										</div>
									</a>
								</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="#">
										<div class="rad-notification-body">
											<div class="lg-text">Anteriores</div>
											<div class="sm-text">3 mensajes</div>
											<em class="pull-right sm-text">2 days jun</em>
										</div>
									</a>
								</li>
								<li class="rad-dropmenu-footer"><a href="#">ver todas</a></li>
							</ul>
						</li>
						<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-gamepad"><span class="rad-menu-badge rad-bg-primary">2</span></i></a>
							<ul class="rad-dropmenu-item">
								<li class="rad-dropmenu-header"><a href="#">Juegos</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="<?php echo RUTA_CUBO; ?>">
										<div class="rad-notification-body">
											<div class="lg-text">Cubo</div>
										</div>
									</a>
								</li>
								<li class="rad-notification-item text-left">
									<a class="rad-notification-content" href="<?php echo RUTA_PACMAN; ?>">
										<div class="rad-notification-body">
											<div class="lg-text">Pacman</div>
										</div>
									</a>
								</li>
								<li class="rad-dropmenu-footer"><a href="#">Ver más juegos</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
	</section>
	<!-- FIN MENU  -->
	<!-- MENU LATERAL -->
	<aside>
		<nav class="rad-sidebar rad-nav-min">
			<ul>
				<li>
					<a href="index.php" class="inbox">
						<i class="fa fa-home"><span class="icon-bg rad-bg-success"></span></i>
						<span class="rad-sidebar-item">Mi Perfil</span>
					</a>
				</li>
				<li>
					<a href="noticias.php">
						<i class="fa fa-bar-chart-o">
							<span class="icon-bg rad-bg-danger"></span>
						</i>
						<span class="rad-sidebar-item">Noticias</span>
					</a>
				</li>
				<li><a href="mensajes.php" class="snooz"><i class="fa fa-envelope-o"><span class="icon-bg rad-bg-primary"></span></i><span class="rad-sidebar-item">Mensaje</span></a></li>
				<li><a href="amigos.php" class="done"><i class="fa fa-users"><span class="icon-bg rad-bg-warning"></span></i><span class="rad-sidebar-item">Amigos</span></a></li>
				<li>
					<a href="fotos.php">
						<i class="fa fa-picture-o"><span class="icon-bg rad-bg-violet"></span></i>
						<span class="rad-sidebar-item">Fotos</span>
					</a>
				</li>
			</ul>
		</nav>
	</aside>
	<!-- FIN MENU LATERAL -->