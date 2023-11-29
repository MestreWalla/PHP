<?php

//Modificadores de visibilidade

//public -> atributos e metodos estao acessiceis por todos, dentro e fora da classe onde estao implementados.
//protected -> atributos e metodos estao acessiveis pela propria classe onde estao edclarados e pelas classes herdeiras (heranca).
//private -> atributos e metodos estao acessiveis apenas pela classe onde estao declarados.

class Veiculo {
    public $marca;
    protected $modelo;
    private $cor;

    public function Ligar(){
        echo "Ligado...";
    }

    public function setModelo($modelo){return $this->modelo = $modelo;}
    public function getModelo(){return $this->modelo;}
    public function setCor($cor){return $this->cor = $cor;}
    public function getCor(){return $this->cor;}
    
}