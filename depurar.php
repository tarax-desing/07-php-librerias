<?php
/*Librería que nos permite depurar código de php desde el navegador
>composer require tracy\tracy
*/
require_once'vendor/autoload.php';
use Tracy\Debugger;
Debugger::enable();
$frutas =['Naranjas, limones, fresas, melocotones'];
Debugger::barDump($frutas,'Frutas');
echo'<h1>Debugueando con Tracy</h1>';

try {
    throw new Exception('error gordísimo');
}catch (Exception $e) {
    Debugger::log($e);
}