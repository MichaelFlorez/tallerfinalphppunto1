<?php 

require_once 'Valor.php';

class Byte extends Valor{

    public function calcularDigitobinarioAByte(){
        return $this->getValor() / 8;
    }

    public function calcularBitAByte(){
        return $this->getValor() / 8;
    }

    public function calcularKilobyteAByte(){
        return $this->getValor() * 1024;
    }

    public function calcularMegabyteAByte(){
        return $this->getValor() * 1024 * 1024;
    }

    public function calcularGigabyteAByte(){
        return $this->getValor() * 1024 * 1024 * 1024;
    }

    public function calcularTerabyteAByte(){
        return $this->getValor() * 1024 * 1024 * 1024 * 1024;
    }



}

?>