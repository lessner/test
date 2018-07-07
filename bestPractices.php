<?php
$condicion1 = false;
$condicion2 = false;
$condicion3 = false;
$condicion4 = false;

if ($condicion1
    || $condicion2
    && $condicion3
    && $condicion4
){
    echo 'Se Cumple!';
} else {
    echo 'No se Cumple';
}


