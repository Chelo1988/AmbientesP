

   	<?php
   	
   	function generar_lista()

   	{

	$nombre = $_POST['nombre'];
	echo("Nombre : ".$nombre);
	echo("<br>");
	//echo $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	echo("Apellidos : ".$apellido1);
	echo(" ".$apellido2);
	echo("<br>");

	$genero = $_POST['genero'];
	echo("Genero : ".$genero);
	echo("<br>");

	$email = $_POST['email'];
	echo("Email : ".$email);
	echo("<br>");

	$fecha = $_POST['fecha'];
	echo("Fecha de Nacimiento : ".$fecha);
	echo("<br>");

	$ciudades = $_POST['ciudades'];
	echo("Ciudad de Nacimiento : ".$ciudades);
	echo("<br>");



	$biografia = $_POST['biografia'];
	echo("Biografia : ".$biografia);
	echo("<br>");
	}
	?>


	