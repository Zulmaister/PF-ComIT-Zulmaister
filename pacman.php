<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Pacman';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<head>
	<meta charset="UTF-8">
  	<title>Pacman</title>
    <link rel="stylesheet" href="css/pacman.css">
</head>
<body> 
	<canvas id="mycanvas"></canvas>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.1/dat.gui.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.js'></script>
    <script  src="js/pacman.js"></script>
</body>
<?php

include_once 'plantillas/documento-cierre.inc.php';

?>

</html>