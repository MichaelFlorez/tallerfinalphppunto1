<?php 

require_once 'Valor.php';

class Megabyte extends Valor{

    public function calcularDigitobinarioAMegabyte(){
        return $this->getValor() / 8 / 1024 / 1024;
    }

    public function calcularBitAMegabyte(){
        return $this->getValor() / 8 / 1024 / 1024;
    }

    public function calcularByteAMegabyte(){
        return $this->getValor() / 1024 / 1024;
    }

    public function calcularKilobyteAMegabyte(){
        return $this->getValor() / 1024;
    }

    public function calcularGigabyteAMegabyte(){
        return $this->getValor() * 1024;
    }

    public function calcularTerabyteAMegabyte(){
        return $this->getValor() * 1024 * 1024;
    }

}

?>