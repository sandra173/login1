<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==root){
	print "window.location='administrador.php';";
}

?>
<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>

		<?php
$host="localhost";
$usuario="root";
$password="root";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("votacion",$conectar);
$sql = "SELECT * FROM encuestas ORDER BY id DESC";
$req = mysql_query($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de encuestas</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>


    <div class="wrap">

    	<h1>SISTEMA DE ENCUESTA</h1>
    	<ul class="votacion index">
		<?php
			while($result = mysql_fetch_object($req)){
				echo '<li><a href="encuesta.php?id='.$result->id.'">'.$result->titulo.'</a></li>';
			}
		?>
		</ul>
    	<a href="agregar.php">+ Agregar nueva encuesta</a>
	</div>
</body>
</html>

</div>
</div>
</div>
	</body>
</html>