<?php
// HERANÇA
class Veiculo // Classe Pai
{
    private $marca, $modelo;
    public function Ligar(){echo "Ligando...";}
    public function Desligar(){echo "Desligando...";}
}

class Carro extends Veiculo
{
    private $numRodas;
    public function acelerar(){echo "Acelerando o carro\n";}
}

class Moto extends Veiculo
{
    private $numRodas;
    public function acelerar(){echo "Acelerando a moto\n";}
}

$carro = new Carro("","","");
$carro->$set_marca = "Honda";
var_dump($carro);
$moto = new Moto();
$moto->Ligar();
$moto->Desligar();
var_dump($moto);

?>