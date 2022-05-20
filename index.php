<?php 

require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
// $dompdf->loadHtml("hallo word");
$dompdf->loadHtml(file_get_contents('ppdb/index.html'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
// $dompdf->stream();

$output = $dompdf->output();
file_put_contents('Brochure.pdf', $output);
