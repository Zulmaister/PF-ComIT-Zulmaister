<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Mensajes';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<!-- CONTENIDO -->
	<main>
		<section>
			<div class="rad-body-wrapper rad-nav-min">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div id="frame">
								<div id="sidepanel">
									<div id="profile">
										<div class="wrap">
											<img id="profile-img" src="img/2.jpg" class="online" alt="" />
											<p>Mika</p>
											<div id="status-options">
												<ul>
													<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
													<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
													<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
													<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
												</ul>
											</div>
										</div>
									</div>
									<div id="search">
										<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
										<input type="text" placeholder="Buscar Contacto..." />
									</div>
									<div id="contacts">
										<ul>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status online"></span>
													<img src="img/3.jpg" alt="" />
													<div class="meta">
														<p class="name">Bret</p>
													</div>
												</div>
											</li>
												<li class="contact active">
													<div class="wrap">
														<span class="contact-status busy"></span>
														<img src="img/08.jpg" alt="" />
														<div class="meta">
															<p class="name">Leonardo</p>
														</div>
													</div>
												</li>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status away"></span>
													<img src="img/4.jpg" alt="" />
													<div class="meta">
														<p class="name">Antonette</p>
													</div>
												</div>
											</li>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status online"></span>
													<img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
													<div class="meta">
														<p class="name">Julia</p>
													</div>
												</div>
											</li>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status busy"></span>
													<img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
													<div class="meta">
														<p class="name">Eliana</p>
													</div>
												</div>
											</li>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status"></span>
													<img src="http://emilcarlsson.se/assets/haroldgunderson.png" alt="" />
													<div class="meta">
														<p class="name">Miguel</p>
													</div>
												</div>
											</li>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status"></span>
													<img src="http://emilcarlsson.se/assets/danielhardman.png" alt="" />
													<div class="meta">
														<p class="name">Jesús</p>
													</div>
												</div>
											</li>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status busy"></span>
													<img src="http://emilcarlsson.se/assets/katrinabennett.png" alt="" />
													<div class="meta">
														<p class="name">Rosa</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div id="bottom-bar">
										<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
										<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
									</div>
								</div>
								<div class="content">
									<div class="contact-profile">
										<img src="img/08.jpg" alt="" />
										<p>Leonardo</p>
									</div>
									<div class="messages">
										<ul>
											<li class="sent">
												<img src="img/2.jpg" alt="" />
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, nemo!</p>
											</li>
											<li class="replies">
												<img src="img/08.jpg" alt="" />
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque.</p>
											</li>
											<li class="replies">
												<img src="img/08.jpg" alt="" />
												<p>Lorem ipsum dolor sit amet.</p>
											</li>
											<li class="sent">
												<img src="img/2.jpg" alt="" />
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
											</li>
											<li class="replies">
												<img src="img/08.jpg" alt="" />
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, labore.</p>
											</li>
											<li class="replies">
												<img src="img/08.jpg" alt="" />
												<p>Hola ¿cómo estás?</p>
											</li>
											<li class="sent">
												<img src="img/2.jpg" alt="" />
												<p>Estoy bien gracias.</p>
											</li>
											<li class="replies">
												<img src="img/08.jpg" alt="" />
												<p>Me alegro!</p>
											</li>
										</ul>
									</div>
									<div class="message-input">
										<div class="wrap">
											<input type="text" placeholder="Escribe tu mensaje..." />
											<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
											<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php

include_once 'plantillas/documento-cierre.inc.php';

?>