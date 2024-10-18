<?php
namespace Saludo\Saludo;
// hola
Class Saludo{
    private $msn;
    private $usuario;

    public function __construct($usuario){        
        $this->usuario = $usuario;
        $this->setSaludo();
    }

    private function setSaludo(){
        $this->msn = "Bienvenido, Sr/Sra. ".$this->usuario;
    }

    public function getSaludo(){
        echo $this->msn;
    }
}