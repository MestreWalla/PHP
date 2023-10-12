<?php
include 'Function.php';

$valorA = $_POST['valorA'];
$valorB = $_POST['valorB'];
$resultado = ordem($valorA, $valorB);

echo $resultado;
?>
