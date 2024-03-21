<?php

namespace App;

require './vendor/autoload.php';

class Operaciones {

    private $listaPalabras = ['hola', 'abuelo', 'miau', 'cocodrilo', 'panadero'];

    /**
     * Obtiene una palabra aleatoria
     * @soap
     * @param 
     * @return string
     */
    public function getPalabraAleatoria(): ?string {
        return $this->listaPalabras[array_rand($this->listaPalabras)];
    }

}
