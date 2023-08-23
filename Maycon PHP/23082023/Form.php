<?php

include "Funcao.php";

// Exercicio01

$x = $_POST['raio'];
$M_PI = "3.1415926535898";
$resultado = perimetro($x, $M_PI);
echo "Resultado: $resultado";
echo "<br>";
echo "<hr>";

// Exercicio02

$Cg = $_POST['Cg'];
$Fg = $_POST['Fg'];
$Celcius = Celsius($Cg, $Fg);
$Farenheit = Farenheit($Fg, $Cg);

echo "Em Celsius: $Celcius";
echo "<br>";
echo "Em Farenheit: $Farenheit";
echo "<br>";
echo "<hr>";

// Exercicio03



echo "<style>
    body {
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
        flex-direction:column;
    }
</style>";

?>