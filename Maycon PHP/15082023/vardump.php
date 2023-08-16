<?php
$str = "Ola mundo em php.";
var_dump($str);

echo "<hr>";

if (is_string($str)) :
	echo "É uma variavel string";
else :
	echo "Não é uma variavel string";
endif;

echo "<hr>";

$numero = 4;
var_dump($numero);

if (is_int($numero)) :
	echo "É uma variavel inteira";
else :
	echo "Não é uma variavel inteira";
endif;

echo "<hr>";

//ponto flutuante
$real = 2.75;
var_dump($real);

if (is_float($real)) :
	echo "É uma variavel float";
else :
	echo "Não é uma variavel float";
endif;

echo ("<hr>");

//boll
$bool = true;
var_dump($bool);

if (is_bool($bool)) :
	echo "É uma variavel booleana";
else :
	echo "Não é uma variavel booleana";
endif;

echo ("<hr>");

//array
$fruta = array("Melancia", "Uva", "Morango", 2, 10.5, 7);
var_dump($fruta);

echo ("<hr>");

if (is_array($fruta)) :
	echo "É uma variavel array";
else :
	echo "Não é uma variavel array";
endif;

echo ("<hr>");

//objeto

class Alunos
{
	public $nome;
	public function nomeAluno($nome)
	{
		$this->$nome = $nome;
	}
}
$aluno = new Alunos;
var_dump($aluno);
$aluno->nomeAluno("Joao");
echo ("<br>");
var_dump($aluno);
echo ("<br>");
if (is_object($fruta)) :
	echo "É um objeto";
else :
	echo "Não é um objeto";
endif;

echo ("<hr>");

//null
$saldo = NULL;
var_dump($saldo);

echo ("<hr>");

$a = 10;
$b = 50;

if ($a > $b) {
	echo "a é maior que b";
} elseif ($a == $b) {
	echo "a é igual a b";
} else {
	echo "a é menor que b";
}

echo ("<hr>");

$i = 3;
switch ($i) {
	case 0:
		echo "i é igual a 0";
		break;
	case 1:
		echo "i é igual a 1";
		break;
	case 2:
		echo "i é igual a 2";
		break;
	default:
	echo "i não é igual a 0, 1 ou 2.";
}
?>