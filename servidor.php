<?php

require './vendor/autoload.php';
$url = "http://localhost/serviciopalabras/servicio.wsdl";

use App\Operaciones;

try {
    $server = new SoapServer($url);
    $server->setClass(Operaciones::class);
    $server->handle();
} catch (SoapFault $f) {
    die("error en server: " . $f->getMessage());
}
