<?php
include 'Function.php';

$maior = $_POST['valor01'];
$menor = $_POST['valor02'];
$operacao = $_POST['operacao'];
$calculo = calculadora($maior, $menor, $operacao);

echo "Resultado da operação: " . $calculo;
?>
