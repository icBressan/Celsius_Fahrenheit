<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
</head>
<body>
    <h1>Resultado da Conversão</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temp"];
        $tipo = $_POST["tipo"];

        if ($tipo == "celsiusToFahrenheit") {
            $resultado = ($temp * 9/5) + 32;
            echo "{$temp}° Celsius é igual a {$resultado}° Fahrenheit.";
        } elseif ($tipo == "fahrenheitToCelsius") {
            $resultado = ($temp - 32) * 5/9;
            echo "{$temp}° Fahrenheit é igual a {$resultado}° Celsius.";
        }
    }
    ?>
</body>
</html>


