<?php
/*instalar composer
descargar desde composer setup.exe e instalarlo
comprobar la instalación en cmd  >composer -v

busca en librerías de php
https://packagist.org
para generar pdf.......primero hay que instalar la librería: html2pdf
*/
require 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();


$html = "<h1>Hola desde pdf</h1>";
$html .="<p>Soy un pdf generado desde php</p>";

$html2pdf->writeHTML($html);
$html2pdf->output("pdf_creado.pdf");
