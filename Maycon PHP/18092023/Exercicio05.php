<?php
function calcularConsumoCusto($quilometragem, $consumoLitros, $precoLitro) {
    $consumoMedio = $quilometragem / $consumoLitros;
    $custoPorQuilometro = $precoLitro / $consumoMedio;
    
    $resultados = array(
        "Consumo Médio (km/l)" => $consumoMedio,
        "Custo por Quilômetro" => $custoPorQuilometro
    );
    
    return $resultados;
}

$quilometragem = 300; // Quilometragem percorrida
$consumoLitros = 20; // Consumo em litros
$precoLitro = 5.5; // Preço do litro de combustível
$resultadosConsumoCusto = calcularConsumoCusto($quilometragem, $consumoLitros, $precoLitro);

foreach ($resultadosConsumoCusto as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
