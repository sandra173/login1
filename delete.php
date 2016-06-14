<html lang="en">
	<head>
		<title>admin</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>

		<form role="form" name="login" action="eliminar.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre del usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		 </br>
		  <button type="submit"  name="eliminar" ">Eliminar</button>
		</form>
</div>
</div>
	</body>
</html>
