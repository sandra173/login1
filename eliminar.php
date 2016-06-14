<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
		$clav= $_POST["username"];
		echo "$username";

			mysql_connect("localhost", "root", "root");	
				mysql_select_db("votacion");
					mysql_query("DELETE FROM user WHERE username='$username'") or die ("404");
	?>
</body>
</html>