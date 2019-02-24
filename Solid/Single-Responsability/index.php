<?php

require_once "Classes/Book.php";
require_once "Interfaces/Exportable.php";
require_once "Classes/EPubExporter.php";
require_once "Classes/PDFExporter.php";

use Classes\Book;
use Interfaces\Exporter;
use Classes\PdfExporter;
use Classes\EPubExporter;

$book = new Book();

$pdfExporter = new PdfExporter();
echo $pdfExporter->export($book);

echo PHP_EOL . PHP_EOL;

$epubExporter = new EPubExporter();
echo $epubExporter->export($book);
