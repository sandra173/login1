<?php
$conexion = new mysqli (); //conexiones con objetos
$conexion -> connect ('localhost', 'root', 'root', 'votacion');//servidor, usuario, contraseña, base de datos
	if ($conexion -> connect_error)
	 {
		die ('ERROR DE LA CONEXION'. $conexion -> connect_error);
	}
?>