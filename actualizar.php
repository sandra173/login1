<!DOCTYPE html>
<html>
<head>
	<title>insertar</title>
</head>
<body>
	<?php
		$clav= $_POST["clave"];
		$nombr=$_POST["nombre"];

			mysql_connect("localhost", "sandra", "123");	
				mysql_select_db("ejemplo");
					mysql_query("UPDATE datos SET nombre='$nombr' WHERE clave='$clav'") or die ("Error");
					echo "DATE CURRENT";
	
	
	?>
</body>
</html>