<?php
define("FECHA", date('Y-m-d H:i:s'));
define("USUARIO", 'lessner');
$fecha = date("Y-m-d H:i:s");
$usuario = 'USUARIO1';

/*
echo obtieneFecha();

function obtieneFecha(){    
    return USUARIO;
}
*/

$web = function(){
    echo "Que Existe!!";
};

echo $web;



