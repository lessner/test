<?php

$codigo = '9999-06-0324';

$numeroString = substr($codigo,0,4);
echo $numeroString . '<br>';
//Convertir a numero el string
$numeroNumber = (int)$numeroString;
echo $numeroNumber . '<br>';
//Suma un digito al numero
$sumaNumero = $numeroNumber + 1;
//Conocer cuantos digitos tiene
$numeroDigitos = strlen($sumaNumero);
echo $numeroDigitos . '<br>';

if($numeroDigitos < 2){
    $nuevoNumero = '000'.(string)$sumaNumero;
    $respuesta = $nuevoNumero;
}elseif($numeroDigitos < 3){
    $nuevoNumero = '00'.(string)$sumaNumero;
    $respuesta = $nuevoNumero;
}elseif($numeroDigitos == 4){
    $nuevoNumero = (string)$sumaNumero;
    $respuesta = $nuevoNumero;
}else{
    echo 'ha llegado al maximo de empleados permitidos';
}

/*

switch ($numeroDigitos) {
    case 3:
        $nuevoNumero = '000'.(string)$sumaNumero;
        $respuesta = $nuevoNumero;
        break;
    case 2:
        $nuevoNumero = '00'.(string)$sumaNumero;
        $respuesta = $nuevoNumero;
        break;
    default:
        $nuevoNumero = (string)$sumaNumero;
        $respuesta = $nuevoNumero;
        break;
}*/

echo $respuesta;