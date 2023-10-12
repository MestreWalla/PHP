<?php
include 'Function.php';


$n = $_POST['fatorial']; // Número para calcular o fatorial
$resultadoFatorial = calcularFatorial($n);

echo "O fatorial de " . $n . " é: " . $resultadoFatorial;
?>
