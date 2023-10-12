<?php
include 'Function.php';

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$resultado = mediaGeral($nota1, $nota2, $nota3);

echo "$resultado";
?>
