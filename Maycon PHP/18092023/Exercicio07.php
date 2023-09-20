<?php
include 'Function.php';

$numeroMes = $_POST['numInteiro']; // Número do mês a ser convertido
$nomeMes = nomeDoMes($numeroMes);

echo $nomeMes;
?>
