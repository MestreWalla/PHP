<?php
include 'Function.php';

$valorA = $_POST['valorA'];
$valorB = $_POST['valorB'];
$resultado = variavelMaiorMenor($valorA, $valorB);
echo $resultado;
?>
