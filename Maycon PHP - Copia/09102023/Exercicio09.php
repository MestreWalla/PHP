<?php
include 'Function.php';

$nome = $_POST['nome'];
    $idade = $_POST['idade'];
$resultado = idade($nome, $idade);

echo "$resultado\n";
?>
