<?php 
if(isset($_POST["btncalcular"])){

    require_once 'Digitobinario.php';
    require_once 'Bit.php';
    require_once 'Byte.php';
    require_once 'Kilobyte.php';
    require_once 'Megabyte.php';
    require_once 'Gigabyte.php';
    require_once 'Terabyte.php';

    $digitobinario = new Digitobinario();
    $bit = new Bit();
    $byte = new Byte();
    $kilobyte = new Kilobyte();
    $megabyte = new Megabyte();
    $gigabyte = new Gigabyte();
    $terabyte = new Terabyte();

    $valor = $_POST["txtvalor"];

    $tipomedida = $_POST["selmedidas"];
    $opcion = $_POST["medidas"];

    switch($opcion){

        case "digito binario":
            $digitobinario->setValor($valor);
            
            switch($tipomedida){
                
                case "Bit":
                    echo "La conversión de Bit a Dígito binario es " . $digitobinario->calcularBitADigitobinario();
                break;

                case "Byte":
                    echo "La conversión de Byte a Dígito binario es " . $digitobinario->calcularByteADigitobinario();
                break;

                case "Kilobyte":
                    echo "La conversión de Kilobyte a Dígito binario es " . $digitobinario->calcularKilobyteADigitobinario();
                break;

                case "Megabyte":
                    echo "La conversión de Megabyte a Dígito binario es " . $digitobinario->calcularMegabyteADigitobinario();
                break;

                case "Gigabyte":
                    echo "La conversión de Gigabyte a Dígito binario es " . $digitobinario->calcularGigabyteADigitobinario();
                break;

                case "Terabyte":
                    echo "La conversión de Terabyte a Dígito binario es " . $digitobinario->calcularTerabyteADigitobinario();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "bit":
            $bit->setValor($valor);
            
            switch($tipomedida){
                
                case "Digito binario":
                    echo "La conversión de Dígito binario a Bit es " . $bit->calcularDigitobinarioABit();
                break;

                case "Byte":
                    echo "La conversión de Byte a Bit es " . $bit->calcularByteABit();
                break;

                case "Kilobyte":
                    echo "La conversión de Kilobyte a Bit es " . $bit->calcularKilobyteABit();
                break;

                case "Megabyte":
                    echo "La conversión de Megabyte a Bit es " . $bit->calcularMegabyteABit();
                break;

                case "Gigabyte":
                    echo "La conversión de Gigabyte a Bit es " . $bit->calcularGigabyteABit();
                break;

                case "Terabyte":
                    echo "La conversión de Terabyte a Bit es " . $bit->calcularTerabyteABit();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "byte":
            $byte->setValor($valor);
            
            switch($tipomedida){
                
                case "Digito binario":
                    echo "La conversión de Dígito binario a Byte es " . $byte->calcularDigitobinarioAByte();
                break;

                case "Bit":
                    echo "La conversión de Bit a Byte  es " . $byte->calcularBitAByte();
                break;

                case "Kilobyte":
                    echo "La conversión de Kilobyte a Byte  es " . $byte->calcularKilobyteAByte();
                break;

                case "Megabyte":
                    echo "La conversión de Megabyte a Byte es " . $byte->calcularMegabyteAByte();
                break;

                case "Gigabyte":
                    echo "La conversión de Gigabyte a Byte es " . $byte->calcularGigabyteAByte();
                break;

                case "Terabyte":
                    echo "La conversión de Terabyte a Byte es " . $byte->calcularTerabyteAByte();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "kilobyte":
            $kilobyte->setValor($valor);
            
            switch($tipomedida){
                
                case "Digito binario":
                    echo "La conversión de Dígito binario a Kilobyte es " . $kilobyte->calcularDigitobinarioAKilobyte();
                break;

                case "Bit":
                    echo "La conversión de Bit a Kilobyte  es " . $kilobyte->calcularBitAKilobyte();
                break;

                case "Byte":
                    echo "La conversión de Byte a Kilobyte  es " . $kilobyte->calcularByteAKilobyte();
                break;

                case "Megabyte":
                    echo "La conversión de Megabyte a Kilobyte es " . $kilobyte->calcularMegabyteAKilobyte();
                break;

                case "Gigabyte":
                    echo "La conversión de Gigabyte a Kilobyte es " . $kilobyte->calcularGigabyteAKilobyte();
                break;

                case "Terabyte":
                    echo "La conversión de Terabyte a Kilobyte es " . $kilobyte->calcularTerabyteAKilobyte();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "megabyte":
            $megabyte->setValor($valor);
            
            switch($tipomedida){
                
                case "Digito binario":
                    echo "La conversión de Dígito binario a Megabyte es " . $megabyte->calcularDigitobinarioAMegabyte();
                break;

                case "Bit":
                    echo "La conversión de Bit a Megabyte  es " . $megabyte->calcularBitAMegabyte();
                break;

                case "Byte":
                    echo "La conversión de Byte a Megabyte  es " . $megabyte->calcularByteAMegabyte();
                break;

                case "Kilobyte":
                    echo "La conversión de Kilobyte a Megabyte es " . $megabyte->calcularKilobyteAMegabyte();
                break;

                case "Gigabyte":
                    echo "La conversión de Gigabyte a Megabyte es " . $megabyte->calcularGigabyteAMegabyte();
                break;

                case "Terabyte":
                    echo "La conversión de Terabyte a Megabyte es " . $megabyte->calcularTerabyteAMegabyte();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "gigabyte":
            $gigabyte->setValor($valor);
            
            switch($tipomedida){
                
                case "Digito binario":
                    echo "La conversión de Dígito binario a Gigabyte es " . $gigabyte->calcularDigitobinarioAGigabyte();
                break;

                case "Bit":
                    echo "La conversión de Bit a Gigabyte  es " . $gigabyte->calcularBitAGigabyte();
                break;

                case "Byte":
                    echo "La conversión de Byte a Gigabyte  es " . $gigabyte->calcularByteAGigabyte();
                break;

                case "Kilobyte":
                    echo "La conversión de Kilobyte a Gigabyte es " . $gigabyte->calcularKilobyteAGigabyte();
                break;

                case "Megabyte":
                    echo "La conversión de Megabyte a Gigabyte es " . $gigabyte->calcularMegabyteAGigabyte();
                break;

                case "Terabyte":
                    echo "La conversión de Terabyte a Gigabyte es " . $gigabyte->calcularTerabyteAGigabyte();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "terabyte":
            $terabyte->setValor($valor);
            
            switch($tipomedida){
                
                case "Digito binario":
                    echo "La conversión de Dígito binario a Terabyte es " . $terabyte->calcularDigitobinarioATerabyte();
                break;

                case "Bit":
                    echo "La conversión de Bit a Terabyte  es " . $terabyte->calcularBitATerabyte();
                break;

                case "Byte":
                    echo "La conversión de Byte a Terabyte  es " . $terabyte->calcularByteATerabyte();
                break;

                case "Kilobyte":
                    echo "La conversión de Kilobyte a Terabyte es " . $terabyte->calcularKilobyteATerabyte();
                break;

                case "Megabyte":
                    echo "La conversión de Megabyte a Terabyte es " . $terabyte->calcularMegabyteATerabyte();
                break;

                case "Gigabyte":
                    echo "La conversión de Gigabyte a Terabyte es " . $terabyte->calcularGigabyteATerabyte();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;
    }

        



}else{
    echo "Acceso no permitido.";
}


?>