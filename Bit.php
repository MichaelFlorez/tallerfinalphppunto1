<?php 

require_once 'Valor.php';

class Bit extends Valor{

    public function calcularDigitobinarioABit(){
        return $this->getValor() * 1;
    }

    public function calcularByteABit(){
        return $this->getValor() * 8;
    }

    public function calcularKilobyteABit(){
        return $this->getValor() * 8 * 1024;
    }

    public function calcularMegabyteABit(){
        return $this->getValor() * 8 * 1024 * 1024;
    }

    public function calcularGigabyteABit(){
        return $this->getValor() * 8 * 1024 * 1024 * 1024;
    }

    public function calcularTerabyteABit(){
        return $this->getValor() * 8 * 1024 * 1024 * 1024 * 1024;
    }



}

?>