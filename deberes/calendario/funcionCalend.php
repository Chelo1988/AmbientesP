<?php

# definimos los valores iniciales para nuestro calendario

$month=date("n");

$year=date("Y");

$diaActual=date("j"); 

# Obtenemos el dia de la semana del primer dia, Devuelve 0 para domingo, 6 para sabado

$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7; 

# Obtenemos el ultimo dia del mes

$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1)); 


$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",

"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");



?>
