<?php
session_start ();
error_reporting(0);
//echo 'WELCOME <strong>' . $_SESSION ['nombrePERSONA'] . '</strong>';//abre la sesion y muestra los datos
//echo $_SESSION ['emailPERSONA'];// inicia sesion y mustra datos establecidos en validaLOGIN.php
$varSESION = $_SESSION ['nombrePERSONA'];
	if ($varSESION == null ||  $varSESION == '')// (||significa: la palabra o)
	{
		echo 'ERROR 404';
		die ();
	}
$varSESION1 = $_SESSION ['emailPERSONA'];
	if ($varSESION1 == null ||  $varSESION1 == '')// (||significa: la palabra o)
	{
		echo 'ERROR 404';
		die ();
	}
?>


<!DOCTYPE html><!--html5-->
<html lang="es"><!--lenguaje de la pagina-->
	
	<head><!--cabecera-->
	<meta charset = "utf-8"><!--define el idioma-->
	<title>Datos</title><!--nombre de la pagina-->
	</head><!--cierre de la cabecera-->
	
	<body><!--cuerpo del programa-->
	
	<?php
		echo $_SESSION ['nombrePERSONA'];
		echo '                         ';
		echo $_SESSION ['emailPERSONA'];
	?>
	<br></br>
	<a href="cerrarSESION.php">Exit</a>
	</body><!--cierre del programa-->

</html><!--cierre de html5-->