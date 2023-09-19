<?php
function divisaoPorSubtracoesSucessivas($maior, $menor) {
    $resultado = 0;
    
    while ($maior >= $menor) {
        $maior -= $menor;
        $resultado++;
    }
    
    return $resultado;
}

$maior = 20; // Maior número
$menor = 4; // Menor número
$resultadoDivisao = divisaoPorSubtracoesSucessivas($maior, $menor);

echo "Resultado da divisão: " . $resultadoDivisao;
?>
