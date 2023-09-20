<?php
include 'Function.php';

$a = $_POST['valorA']; // Primeiro lado
$b = $_POST['valorB']; // Segundo lado
$c = $_POST['valorC']; // Terceiro lado
$resultadoTriangulo = verificarTriangulo($a, $b, $c);

echo $resultadoTriangulo;
?>
