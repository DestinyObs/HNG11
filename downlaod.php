<?php
// Specify the file path
$file = 'img/MyCV.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set headers for PDF download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="DestinyObuehCV.pdf"');
    header('Content-Length: ' . filesize($file));

    // Output the PDF file
    readfile($file);
    exit;
} else {
    // File not found
    echo 'File not found.';
}
?>
