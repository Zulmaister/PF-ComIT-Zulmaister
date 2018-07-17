<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Cubo';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<head>
  	<title>Cubo</title>
	<link rel="stylesheet" href="css/cubo.css">
</head>
<body> 
	<!-- MI CONTENIDO -->
	<h2>Cubo</h2>
    <script  src="js/cubo.js"></script>
</body>
	<!-- FIN CONTENIDO -->
<?php

include_once 'plantillas/documento-cierre.inc.php';

?>
