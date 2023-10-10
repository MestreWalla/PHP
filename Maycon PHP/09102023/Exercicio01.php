<?php
include 'Function.php';

// Exercicio01
$valor = $_POST['valor'];
$resultadoSinal = verificar($valor);

echo "<hr>";
echo "<h3>EXERCICIO 01</h3>";
echo "<hr>";
echo "O valor é $resultadoSinal.";
echo "<hr>";
?>