<?php
include 'Function.php';

$quilometragem = $_POST['kmPercorrido']; // Quilometragem percorrida
$consumoLitros = $_POST['consumo']; // Consumo em litros
$precoLitro = $_POST['valorCombustivel']; // Preço do litro de combustível
$resultadosConsumoCusto = calcularConsumoCusto($quilometragem, $consumoLitros, $precoLitro);

foreach ($resultadosConsumoCusto as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
