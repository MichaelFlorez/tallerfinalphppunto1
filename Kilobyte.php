<?php 

require_once 'Valor.php';

class Kilobyte extends Valor{

    public function calcularDigitobinarioAKilobyte(){
        return $this->getValor() / 8 / 1024;
    }

    public function calcularBitAKilobyte(){
        return $this->getValor() / 8 / 1024;
    }

    public function calcularByteAKilobyte(){
        return $this->getValor() / 1024;
    }

    public function calcularMegabyteAKilobyte(){
        return $this->getValor() * 1024;
    }

    public function calcularGigabyteAKilobyte(){
        return $this->getValor() * 1024 * 1024;
    }

    public function calcularTerabyteAKilobyte(){
        return $this->getValor() * 1024 * 1024 * 1024;
    }



}
