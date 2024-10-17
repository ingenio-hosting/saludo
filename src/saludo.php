<?php
namespace Saludo\Saludo;

Class Saludo{
    private $msn;

    public function __contruct(){
        $this->setSaludo();
    }

    private function setSaludo(){
        $this->msn = "Hola Mundo";
    }

    public function getSaludo(){
        echo $this->msn;
    }
}