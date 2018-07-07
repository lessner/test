<?php 
$hoy = date('Y-m-d');
$time = 3;

$datetime1 = date_create($hoy);
$datetime2 = date_create('2018-05-17');
$interval = date_diff($datetime1, $datetime2);
$diasPasados = $interval->format('%a');
$formula = $diasPasados - ($time * 30);
//echo $formula;


$tiempo = 3;

$fechaIniContrato = date_create('2018-05-17');
$fechaActual = date_create($hoy);
$interval = date_diff($fechaActual, $fechaIniContrato);
$diasPasados = $interval->format('%a');
$antiguedad = $diasPasados - ($tiempo * 30);
echo $antiguedad . '<br>';

$var = '20/04/2012';
$date = str_replace('/', '-', $var);
echo date('Y-m-d', strtotime($date));