<?php
$a =$_GET["id"];
$lt = file_get_contents('http://localhost/lasa/process/result.php?id='.$a);

require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($lt);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$date = date("Y.M.d");
$dompdf->stream($date);
?>