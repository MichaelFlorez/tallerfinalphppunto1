<?php 

require_once 'Valor.php';

class Terabyte extends Valor{

    public function calcularDigitobinarioATerabyte(){
        return $this->getValor() / 8 / 1024 / 1024 / 1024 / 1024;
    }

    public function calcularBitATerabyte(){
        return $this->getValor() / 8 / 1024 / 1024 / 1024 / 1024;
    }

    public function calcularByteATerabyte(){
        return $this->getValor() / 1024 / 1024 / 1024 / 1024;
    }

    public function calcularKilobyteATerabyte(){
        return $this->getValor() / 1024 / 1024 / 1024;
    }

    public function calcularMegabyteATerabyte(){
        return $this->getValor() / 1024 / 1024;
    }

    public function calcularGigabyteATerabyte(){
        return $this->getValor() / 1024;
    }

}

?>