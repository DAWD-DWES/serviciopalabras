<?php
require './vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;
use App\Operaciones;

$uri = 'http://localhost/serviciopalabras/servidor.php';
$wsdlGenerator = new PHPClass2WSDL(Operaciones::class, $uri);
$wsdlGenerator->generateWSDL(true);
$fichero = $wsdlGenerator->save('./servicio.wsdl');

