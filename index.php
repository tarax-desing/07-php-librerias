<?php
/*instalar composer
descargar desde composer setup.exe e instalarlo
comprobar la instalación en cmd  >composer -v

busca en librerías de php
https://packagist.org
para generar pdf.......primero hay que instalar la librería: html2pdf

forzar a instalar una versión >composer require spipu/html2pdf:^5.2.8

problemas en la instalación
he descomentado en php.ini
extension=zip
extension=gd
importar autoload para poder utilizar las librerías
utilizar la librería
*/
require 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
///creo una instancia de la clase Html2pdf
$html2pdf = new Html2Pdf();

//creo contenido
$html = "<h1>Hola desde pdf</h1>";
$html .="<p>Soy un pdf generado desde php</p>";
//agrego contenido al pdf
$html2pdf->writeHTML($html);
//crea un archivo pdf y lo muestra
$html2pdf->output("pdf_creado.pdf");
