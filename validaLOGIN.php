<?php
// valida usuarios y contraseñas
session_start ();
include_once 'conexion.php'; //conectar la base de datos 
//$*** hace referencia a una variable
$user = $_POST ['usuario'];//(name) hace referencia a la linea 10 de index.htm
$passw = $_POST ['pass'];//linea 13 index
//para probar si esta haciendo la conexion 
//(colocar en el formulario cualquiere usuario y la contraseña establecidos en la base de datos)
//borrar la linea 3 y 4 y poner: 
//echo $usuario = $_POST['usuario'];

$sentenciaSQL = "SELECT * FROM persona WHERE usuario = '$user' AND password = '$passw' ";
$resultado = $conexion->query ($sentenciaSQL);
	if ($resultado -> num_rows>0) 
	{
		//echo 'Datos correctos'; 
		while ($registros = $resultado -> fetch_array ())
		{
			//echo $registros ['nombre'];//mostar datos, colocar el nombre de la columna es este caso nombre
			//echo $registros ['email'];
			//print_r ($registros);//para imprimir arreglos	
			$nombres = $registros ['nombre'];// nombre: es el nombre de la columna; para enviar a la pagina de inicio dee aplicacion es decir inicio.php que es la pagina pricipal ejemplo localhost/LOGIN/inicio.php
			$emai = $registros ['email'];
			$_SESSION ['nombrePERSONA'] = $nombres;//
			$_SESSION ['emailPERSONA'] = $emai;//
			header ('location:verdatos.php');//redirecciona
		}//cierre de while 
	} // cierre de if
	
	else
	{
		echo 'INCORRECT';
	}
?>