<?php
function verificarTriangulo($a, $b, $c) {
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        return "Os lados formam um triângulo.";
    } else {
        return "Os lados não formam um triângulo.";
    }
}

$a = 4; // Primeiro lado
$b = 5; // Segundo lado
$c = 7; // Terceiro lado
$resultadoTriangulo = verificarTriangulo($a, $b, $c);

echo $resultadoTriangulo;
?>
