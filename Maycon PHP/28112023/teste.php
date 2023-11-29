<?php

require_once("Moto.php");

    $veiculo = new Moto($marca, $modelo, $cor);

    $veiculo->setMarca("Honda");
    echo "Marca: " . $veiculo->getMarca() . "\n";

    $veiculo->setModelo ("Biz");
    echo "Modelo: " . $veiculo->getModelo() . "\n";

    $veiculo->setCor ("Branco");
    echo "Cor: " . $veiculo->getCor() . "\n";

    echo "\n";

    var_dump($veiculo);
?>