<?php 

require_once 'Valor.php';

class Gigabyte extends Valor{

    public function calcularDigitobinarioAGigabyte(){
        return $this->getValor() / 8 / 1024 / 1024 / 1024;
    }

    public function calcularBitAGigabyte(){
        return $this->getValor() / 8 / 1024 / 1024 / 1024;
    }

    public function calcularByteAGigabyte(){
        return $this->getValor() / 1024 / 1024 / 1024;
    }

    public function calcularKilobyteAGigabyte(){
        return $this->getValor() / 1024 / 1024;
    }

    public function calcularMegabyteAGigabyte(){
        return $this->getValor() / 1024;
    }

    public function calcularTerabyteAGigabyte(){
        return $this->getValor() * 1024;
    }

}

?>