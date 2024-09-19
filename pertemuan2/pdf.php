<?php
require_once __DIR__ .'/vendor/autoload.php';

$mpdf = mew \Mpdf\Mpdf();
$mpdf -> WriteHTML('<h1>Hello World!!</h1>');
$mpdf -> Output();
?>