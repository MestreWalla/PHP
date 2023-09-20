<?php
include 'Function.php';

// Exercicio01
$m2 = $_POST['quantidade'];

$resultado = metrosComFolga($m2);
$opcao01 = latas18($resultado);
$opcao02 = latas3($resultado);
$valor01 = latas18v($resultado);
$valor02 = latas3v($resultado);
$informar = melhorCompra($resultado);

echo "<hr>";
echo "<h3>EXERCICIO 01</h3>";
echo "<hr>";
// echo "Metragem a comprar com folga de 10%: $resultado m²";
echo "Recomendamos que voce compre $resultado m² de tinta isso te da 10% de folga para eventuais contratempos e erros de calculo que possa estar acontecendo em sua obra.";
echo "<br><br>";
echo "Voce poderia comprar $opcao01" . " latas de 18 litros ";
echo " com valor de: R$ " . ceil("$valor01") . ",00 ";
echo "ou comprar $opcao02" . " latas de 3,6 litros ";
echo " com valor de: R$ " . ceil("$valor02") . ",00 ";
echo melhorCompra($resultado) . ",00";
echo "<hr>";
