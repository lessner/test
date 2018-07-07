<?php
//Funcion anonima
/*
(function ($parametro){
    echo 'Recibi ' .$parametro;
}) ('Hola');
*/

//Funcion asignada a variable
$a = function ($parametro){
  echo 'Recibiendo ' .$parametro . "\n";
};

$a('El texto');

//Funcion como parametro
function f2($function, $parametro){
    $function($parametro);
};

$f = function ($parametro){
  echo 'Recibi ' . $parametro . "\n";
};

f2($f, 'Hola');

//Funcion q retorna una funcion
function f(){
    return function ($parametro){
        echo 'Recibi ' . $parametro . "\n";
    };
}
 $b = f();
$b('Hola');