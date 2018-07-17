			<h2>Registro</h2>
			<div class="input-box">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="nombre" placeholder="Username" required="" <?php $validador -> mostrar_nombre() ?>>
				<?php
				$validador -> mostrar_error_nombre();
				?>
			</div>
			<div class="input-box">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="email" name="email" placeholder="Email" required="" <?php $validador -> mostrar_email() ?>>
				<?php
				$validador -> mostrar_error_email();
				?>
			</div>
			<div class="input-box">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<input type="password" name="clave1" placeholder="Password" required="">
				<?php
				$validador -> mostrar_error_clave1();
				?>
			</div>
			<div class="input-box">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<input type="password" name="clave2" placeholder="Repeat Password" required="">
				<?php
				$validador -> mostrar_error_clave2();
				?>
			</div>
			<div class="input-box">
				<input type="submit" name="enviar" value="Login">
			</div>
			<a href="#">¿Olvidaste tu contraseña?</a>
			<a href="#">¿Ya tienes cuenta?</a>