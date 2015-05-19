<?php
include('funcionCalend.php');
?>

<html lang="es">
<head>

  <title>CALENDARIO</title>
  <link rel="stylesheet" type="text/css" href="css/indexcs.css">

<meta charset="utf-8">

</head>


<body>



<table id="funcionCalend">

	<caption><?php echo $meses[$month]." ".$year?></caption>

	<tr>

		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>

		<th>Vie</th><th>Sab</th><th>Dom</th>

	</tr>

	<tr bgcolor="silver">

		<?php

		$last_cell=$diaSemana+$ultimoDiaMes;

		// hacemos un bucle hasta 42, que es el máximo de valores que puede

		// haber... 6 columnas de 7 dias

		for($i=1;$i<=42;$i++)

		{

			if($i==$diaSemana)

			{

				// determinamos en que dia empieza

				$day=1;

			}

			if($i<$diaSemana || $i>=$last_cell)

			{

				// celca vacia

				echo "<td>&nbsp;</td>";

			}else{

				// mostramos el dia

				if($day==$diaActual)

					echo "<td class='hoy'>$day</td>";

				else

					echo "<td>$day</td>";

				$day++;

			}

			// cuando llega al final de la semana, iniciamos una columna nueva

			if($i%7==0)

			{

				echo "</tr><tr>\n";

			}

		}

	?>

	</tr>

</table>

</body>

</html>