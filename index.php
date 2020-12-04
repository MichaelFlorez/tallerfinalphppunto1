<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio taller final punto 1 conversión de unidades de medida informática con POO y herencia en php</title>
</head>
<body>

    <h1>Conversor de medida informática</h1>
    <p>Ingresa una medida y luego selecciona la medida de destino</p>
    <br>
    <form name="form1" method="POST" action="calcular.php">

        <p>Valor a convertir:<input type="text" id="txtvalor" name="txtvalor">
        <select name="selmedidas">
            <option value="">Seleccione...</option>
            <option value="Digito binario">Dígito binario</option>
            <option value="Bit">bit</option>
            <option value="Byte">Byte</option>
            <option value="Kilobyte">Kilobyte</option>
            <option value="Megabyte">Megabyte</option>
            <option value="Gigabyte">Gigabyte</option>
            <option value="Terabyte">Terabyte</option>
        </select>
        </p> 
        <p>Convertir a la medida de: </p>
        <p>
                <input type="radio" name="medidas" value="digito binario">Dígito binario
            <br><input type="radio" name="medidas" value="bit">bit
            <br><input type="radio" name="medidas" value="byte">Byte
            <br><input type="radio" name="medidas" value="kilobyte">Kilobyte
            <br><input type="radio" name="medidas" value="megabyte">Megabyte
            <br><input type="radio" name="medidas" value="gigabyte">Gigabyte
            <br><input type="radio" name="medidas" value="terabyte">Terabyte
        </p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>


    </form>

    
</body>
</html>