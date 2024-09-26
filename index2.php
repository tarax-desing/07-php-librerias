<?php
require 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
///todo lo que haya entre ob_star y ob_get_clean()se guarda en la variable $html




ob_start();

require_once'plantilla.php';

$html = ob_get_clean();
$html2pdf->writeHTML($html);

/*output(nombreArchivo, segundoArgumento)
segundoArgumento 'I' muestra por el navegador */
$html2pdf->Output(__DIR__. '/'.'pdf_creado.pdf','F');