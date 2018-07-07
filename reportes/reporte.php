<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/kartik-v/yii2-mpdf/Pdf.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();