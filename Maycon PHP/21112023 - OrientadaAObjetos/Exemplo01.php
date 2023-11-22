<?php

// Classe Pessoa (OBJETO IRÁ SER CRIADO)
class Pessoa
{
    // Atributos
    public $nome;
    public $idade;
    // Função
    public function Falar()
    {
        echo $this->nome . " de " . $this->idade . " anos, está falando";
    }
}

// Criando um objeto do tipo pessoa - instancia do objeto
$p = new Pessoa();

$p->nome = "Joaozinho";
$p->idade = "15";

echo "<hr>";
var_dump($p);
echo "<hr>";

$p->Falar();
echo "<br>";

echo $p->nome . "<br>";
echo $p->idade . "<br>";

// Criando um objeto do tipo pessoa - instancia do objeto
$d = new Pessoa();

$d->nome = "Maria";
$d->idade = "14";

echo "<hr>";
var_dump($d);
echo "<hr>";

$d->Falar();
echo "<br>";

echo $d->nome . "<br>";
echo $d->idade . "<br>";
