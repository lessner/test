<?php
 $respuesta = array();
/*
$codigo = '9999-01-0311';
//Sustraer la primera parte del codigo
$numeroString = substr($codigo,0,4);
//Convertir a numero el string
$numeroNumber = (int)$numeroString;
//Suma un digito al numero
$sumaNumero = $numeroNumber + 1;
//Conocer cuantos digitos tiene
$numeroDigitos = strlen($sumaNumero);

if($numeroDigitos <= 2){
    $nuevoNumero = '000'.(string)$sumaNumero;
    $respuesta['numero'] = $nuevoNumero;
}elseif($numeroDigitos == 3){
    $nuevoNumero = '00'.(string)$sumaNumero;
    $respuesta['numero'] = $nuevoNumero;
}elseif($numeroDigitos == 4){
    $nuevoNumero = (string)$sumaNumero;
    $respuesta['numero'] = $nuevoNumero;
}else{
    $respuesta['numero'] = 'Ha llegado al máximo de empleados permitidos';
}
echo json_encode($respuesta);*/

$data = array(
    'Nombre' => 'Lessner Garcia',
    'Correo' => 'camilessner@gmail.com', 'Username' => 'username',
    'password' => '123', 'salt' => 'abcder'
);

$data += ["CreadoPor" => 'LESSNER GARCIA', "CreadoFecha" => date('Y-m-d H:i:s')];

print_r ($data);