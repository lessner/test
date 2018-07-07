<?php
$crear = glob("../rrhh/crear*.php");
$editar = glob("../rrhh/editar*.php");
$consultar = glob("../rrhh/consultar*.php");

$array = array(
    'crear' => $crear,
    'editar' => $editar,
    'consultar' => $consultar
);

echo json_encode($array);

/*
foreach ($crear as $filename) {
    echo substr($filename, 8) . "\n";
}

foreach ($editar as $filename) {
    echo substr($filename, 8) . "\n";
}

foreach ($consultar as $filename) {
    echo substr($filename, 8) . "\n";
}*/

/*
$dir    = '../rrhh';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
*/
//print_r($files1);

//$files = array_diff(scandir($dir), array('.', '..'));

//echo json_encode($crear);
//print_r($editar);
//print_r($consultar);

//print_r($files2);
?>