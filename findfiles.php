<?php

$dir_path = "../rrhh/planilla";
if(is_dir($dir_path))
{
    $files = array_slice(scandir($dir_path, SCANDIR_SORT_ASCENDING), 2);
    echo substr($files[0], 3);
}
/*
$files = scandir('data', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
*/