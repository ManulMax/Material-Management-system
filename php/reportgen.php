<?php
require 'pdfcrowd.php';

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("Manulmax", "ae7687462228c37c29240cebd31d4dd6");

    // run the conversion and write the result to a file
    $client->convertUrlToFile("http://localhost/project/php/viewstock.php", "report.pdf");
    echo"<script>alert('Downloading....')</script>";
    
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    throw $why;
}

?>