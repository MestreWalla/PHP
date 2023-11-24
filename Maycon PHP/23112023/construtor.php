<?php

// PHP Orientado a Objetos
// Metodo cnstrutor

class Carro
{
    private $marca;
    private $modelo;
    private $cor;

    public function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->setModelo($modelo);
        $this->cor = $cor;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($m)
    {
        $this->marca = $m;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($m)
    {
        $this->cor = $m;
    }
}

$carro = new Carro("Toyota", "Hilux", "Azul");
// $carro->setMarca("Honda");
// $carro->setModelo("City");

echo "Marca: " . $carro->getMarca() . "\n";
echo "Modelo: " . $carro->getModelo() . "\n";
echo "Cor: " . $carro->getCor() . "\n";
echo "\n";

$carro2 = new Carro("", "", "");
$carro2->setMarca(readLine("Digite a marca do veiculo: "));
$carro2->setModelo(readLine("Digite o modelo do veiculo: "));
$carro2->setCor(readLine("Digite a cor do veiculo: "));

echo "\n";
echo "Marca: " . $carro2->getMarca() . "\n";
echo "Modelo: " . $carro2->getModelo() . "\n";
echo "Cor: " . $carro2->getCor() . "\n";

?>