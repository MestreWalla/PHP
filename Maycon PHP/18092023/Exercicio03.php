<?php
include 'Function.php';

$maior = $_POST['maior']; // Maior número
$menor = $_POST['menor']; // Menor número
$resultadoDivisao = divisaoPorSubtracoesSucessivas($maior, $menor);

echo "Resultado da divisão: " . $resultadoDivisao;
?>
