<?php
//Datos necesarios
$antiguedad = 400;
$salario = 21000;
$fechaInicioLaboral = '';
$ingresoProyectado = 0;
$comision = 0; $premio = 0;
$baseImponible = 0;
$gastosMedicos = 40000;
$impuestoDeterminado = 0;
$cuotaMensual = 0;
$tablaProgresiva = array(
    array('de'=>0.01, 'hasta'=>152557.15, 'porcentaje' => 0),
    array('de'=>152557.16, 'hasta'=>232622.61, 'porcentaje' => 0.15),
    array('de'=> 232622.62, 'hasta'=>540982.82, 'porcentaje' => 0.20),
    array('de'=>540982.83, 'porcentaje' => 0.25)
);

print_r($tablaProgresiva);

//echo $tablaProgresiva[0]['de'] . '<br>';
/*
if ($antiguedad > 365) {
    //Realizar Calculo
    $ingresoProyectado = $salario * 12; //12 Meses
    echo 'Ingreso Proyectado: ' . number_format($ingresoProyectado, 2, '.', ',') . '<br>';

    $baseImponible = $ingresoProyectado - $gastosMedicos;
    echo 'Base Imponible: ' . number_format($baseImponible, 2, '.', ',') . '<br>';

    echo 'Credito Gastos Medicos: ' . number_format($gastosMedicos, 2, '.', ',') . '<br>';

    if ($baseImponible <= $tablaProgresiva[0]['hasta']){
        echo 'El impuesto determinado es: ' . $impuestoDeterminado;
    } elseif ($baseImponible >= $tablaProgresiva[1]['de'] && $baseImponible <= $tablaProgresiva[1]['hasta']){
        $impuestoDeterminado = ($baseImponible - $tablaProgresiva[1]['de']) * $tablaProgresiva[1]['porcentaje'];
        echo 'El impuesto determinado es: ' . number_format($impuestoDeterminado, 2, '.', ',') . '<br>';
    } elseif ($baseImponible >= $tablaProgresiva[2]['de'] && $baseImponible <= $tablaProgresiva[2]['hasta']){
        $impuestoDeterminado = ($baseImponible - $tablaProgresiva[2]['de']) * $tablaProgresiva[2]['porcentaje'];
        echo 'El impuesto determinado es: ' . number_format($impuestoDeterminado, 2, '.', ',') . '<br>';
    } else {
        $impuestoDeterminado = ($baseImponible - $tablaProgresiva[3]['de']) * $tablaProgresiva[2]['porcentaje'];
        echo 'El impuesto determinado es: ' . number_format($impuestoDeterminado, 2, '.', ',') . '<br>';
    }
    $retencionMensual = $impuestoDeterminado/12;

    echo 'La retencion mensual es de: ' . number_format($retencionMensual, 2, '.', ',');


} else {
    echo 'El empleado tiene menos de un año';
}*/

