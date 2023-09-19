<?php
function multiplicacaoPorSomasSucessivas($a, $b) {
    $resultado = 0;
    $i = 0;
    
    while ($i < $b) {
        $resultado += $a;
        $i++;
    }
    
    return $resultado;
}

$a = 5; // Primeiro número
$b = 3; // Segundo número
$resultadoMultiplicacao = multiplicacaoPorSomasSucessivas($a, $b);

echo "Resultado da multiplicação: " . $resultadoMultiplicacao;
?>
