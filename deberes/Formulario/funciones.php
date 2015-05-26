<?php
include('procesador_datos.php');
?>
<html>
   <head>
    <title>Datos Ingresados</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
   </head>
   <meta charset="utf-8">
   <body>
   	<h1>Datos Ingresados</h1>
   	<?php
  		generar_lista();
	?>

   	
   <p align="center"><A HREF="http://localhost:8080/Formulario/index.php">Regresar Formulario</A></p>

   <p align="center"><a href="./php/cerrar_sesion.php">Cerrar sesión</a></p>
     
   </body>
</html>

</body>
</html>