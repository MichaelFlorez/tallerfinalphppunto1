<?php 

require_once 'Valor.php';

class Digitobinario extends Valor{

    public function calcularBitADigitobinario(){
        return $this->getValor() * 1;
    }

    public function calcularByteADigitobinario(){
        return $this->getValor() * 8;
    }

    public function calcularKilobyteADigitobinario(){
        return $this->getValor() * 8 * 1024;
    }

    public function calcularMegabyteADigitobinario(){
        return $this->getValor() * 8 * 1024 * 1024;
    }

    public function calcularGigabyteADigitobinario(){
        return $this->getValor() * 8 * 1024 * 1024 * 1024;
    }

    public function calcularTerabyteADigitobinario(){
        return $this->getValor() * 8 * 1024 * 1024 * 1024 * 1024;
    }



}

?>