<?php

include "Funcao.php";
$x = $_POST['num1'];
$y = $_POST['num2'];
$tipo = $_POST['tipo'];
$c = "0";

if ($tipo == 'soma') {
    $c = "+";
} elseif ($tipo == 'subtracao') {
    $c = "-";
} elseif ($tipo == 'multiplicacao') {
    $c = "*";
} else {
    $c = "/";
}


$resultado = "0";
if ($c == "+") {
    $resultado = soma($x, $y);
} elseif ($c == "-") {
    $resultado = subtracao($x, $y);
} elseif ($c == "*") {
    $resultado = multiplicacao($x, $y);
} elseif ($c == "/") {
    $resultado = divisao($x, $y);
}

echo "Resultado: $x $c $y = $resultado";
echo "<br>";

echo "<style>
    body {
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
    }
</style>";

?>
