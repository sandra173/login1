<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de encuestas</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>


    <div class="wrap">

	<?php 
echo "Usuarios registrados";
$host="localhost";
$usuario="root";
$password="root";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("votacion",$conectar);

$consulta="SELECT fullname, email, username, password FROM user";
$query=mysql_query($consulta, $conectar);

echo "<table border=1 bgcolor=white>";
while($reg=mysql_fetch_row($query))
{
echo"<tr>";
echo"<br>";
foreach($reg as $cambia){
echo"<td>",$cambia,"</td>";
}
}
echo"</table>";

?>
<form role="form" name="login" action="eliminar.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre del usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		 
		  <button type="submit"  name="eliminar" ">Eliminar</button>
		</form>
		</br>
		<a href="index.php">Volver</a>
</body>
</html>


