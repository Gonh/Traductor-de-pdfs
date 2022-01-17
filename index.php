<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;
use Smalot\PdfParser;
use Smalot\PdfParser\Parser;

require_once('vendor/smalot/pdfparser/src/Smalot/PdfParser/Parser.php');
$source = 'fr';
$target = 'es';

// Initialize and load PDF Parser library 
$parser = new Parser();
 
// Source PDF file to extract text 
$file = 'Découverte-au-Bucegi-by-Cinamar-Radu-_z-lib.org_.pdf'; 
 
// Parse pdf file using Parser library 
$pdf = $parser->parseFile($file); 
 
// Extract text from PDF 
$textContent = $pdf->getText();
$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $textContent);
echo $result;