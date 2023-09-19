<?php
include 'Function.php';

// Exercicio01
$m2 = $_POST['quantidade'];

$resultado = metrosComFolga($m2);
$opcao01 = latas18($resultado);
$opcao02 = latas3($resultado);
$valor01 = latas18v($resultado);
$valor02 = latas3v($resultado);

echo "Metragem a comprar com folga de 10%: $resultado m²";
echo "<br>";
echo "Quantidade de latas de 18L: $opcao01 latas";
echo "<br>";
echo "com valor de: $opcao01v";
echo "<br>";
echo "Quantidade de latas de 18L: $opcao02 latas";
echo "<br>";
echo "com valor de: $opcao02v";
echo "<br>";
echo "<hr>";

?>
