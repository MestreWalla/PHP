<!-- Exercicio
Crie uma classe correspondente a uma conta de banco que tera as seguintes caracteristicas:
-Atributos: nome, numero da conta, saldo.
-Metodos: abrir conta, sacar, depositar, consultar `saldo, consultar
dados do cliente.
Saldo inicial será de R$100,00.

Crie uma nova classe e exiba o menu com as seguintes operações:
1 - Abrir conta.
2 - Consultar Saldo.
3 - Sacar.
4 - Depositar
5 - Consultar dados do cliente.
6 - Sair.

Execute o programa e teste as operações bancárias do menu informando
os dados necessários para cada opção. Exibir o menu ao final de cada operação. -->

<?php

class Cliente {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $idade;
    private $endereco;
    private $numeroConta;
    private $saldo;

    public function __construct($nome, $sobrenome, $cpf, $idade, $endereco, $numeroConta) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->numeroConta = $numeroConta;
        $this->saldo = 100.00; // Saldo inicial de R$100,00
    }

    public function abrirConta() {
        // Pedir variáveis para abrir conta
        echo "Informe os dados para abrir a conta:\n";
        $this->nome = readline("Nome: ");
        $this->sobrenome = readline("Sobrenome: ");
        $this->cpf = readline("CPF: ");
        $this->idade = readline("Idade: ");
        $this->endereco = readline("Endereço: ");
        $this->numeroConta = readline("Número da Conta: ");

        // Lógica para abrir conta com verificação de idade
        if($this->idade >= 18) {
            echo "Conta aberta com sucesso.\n";
        } else {
            echo "Cliente não atende à idade mínima para abrir uma conta.\n";
        }
    }

    public function sacar($valor) {
        // Lógica para sacar
        if($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ ".$valor." realizado com sucesso.\n";
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.\n";
        }
    }

    public function depositar($valor) {
        // Lógica para depositar
        if($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ ".$valor." realizado com sucesso.\n";
        } else {
            echo "Valor inválido para depósito.\n";
        }
    }

    public function consultarSaldo() {
        // Lógica para consultar saldo
        echo "Saldo atual: R$ ".$this->saldo."\n";
    }

    public function consultarDadosCliente() {
        // Lógica para consultar dados do cliente
        echo "Nome: ".$this->nome."\n";
        echo "Sobrenome: ".$this->sobrenome."\n";
        echo "CPF: ".$this->cpf."\n";
        echo "Idade: ".$this->idade."\n";
        echo "Endereço: ".$this->endereco."\n";
        echo "Número da Conta: ".$this->numeroConta."\n";
        echo "Saldo: R$ ".$this->saldo."\n";
    }
}

//Abrir conta
$cliente = new Cliente("", "", "", "", "", "");
$cliente->abrirConta();
$cliente->consultarDadosCliente();
$cliente->consultarSaldo();

