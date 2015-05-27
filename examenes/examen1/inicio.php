<?php


?>

<head>
	
	<title>LFormulario</title>

<meta charset ="utf-8" >

<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
	<form>
	
	<h1>Formulario</h1><br>
<table>
	<tr>
		<td>Ver Notas en:</td>
		<td>
			<select name="notas">
            <option>Programacion</option>
            <option>Redes</option>
		</td>
	
	<tr>
        <td>Color:</td>
        <td>
          <input name="color" type="checkbox" value="color" />Tabla a Color <br>
        </td>
     </tr>

</table>

<table id= "c">
	<tr>
		 <td  colspan="2">
         <br>
         <input type="submit" value="Ver" /><br><br>
        </td>
		
	</tr>
</table>



</form>
</body>

</html>