<?php
$file = $_GET['file'] . ".pdf";

// will output a pdf file
header('Content-Type: application/pdf');

header('Content-Disposition: attachment; filename="download.pdf"');

$imagepdf = file_put_contents($image, file_get_contents($file));
