<?php

//Criar uma função que calcula a media aritmetica de quatro notas de um aluno exibindo sua situação:
//Aprovado - se média >=7
//Exame - se média >=5
//Reprovado - se média <5

	function media ($a, $b, $c, $d) {
		$retorno = (($a+$b+$c+$d)/4);

	if ($retorno >= 7) {
		echo "Aprovado com nota: ";
	} elseif ($retorno >= 5) {
		echo "Exame com nota: ";
	} else {
		echo "Reprovado com nota: ";
	}
	return $retorno;

	}
	echo media(4,9,9,6);

	echo("<hr>");

//Criar uma função que receba o array de números (0,1,2,3,4,5,6,7,8,9) e imprima apenas os que forem pares.
	function parImpar($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) {
		$numeros = array($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
		foreach ($numeros as $numero) {
		    if ($numero % 2 == 0) {
		    	echo "O Número $numero é par; <br>";
			} else {
		    	echo "O Número $numero é impar; <br>";
		    }
		}
	}
	echo parImpar(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
	echo("<hr>");
//Criar uma função recursiva que retorna o fatorial de um numero. Lembrando: (Fatorial de 0 é 1 e Fatorial de 1 é 1).
	$numeroF = 5;
	for ($i = $numeroF; $i >= 1; $i--) { 
		$multiplicação = $numeroF * $i;
	}
	echo("$multiplicação");
	echo("<hr>");
//Criar função que receba um numero inteiro qualquer e mostre sua tabuada.
	echo("<hr>");
//Criar função que receba um numero qualquer e verifica se ele é primo ou não, informando quantos divisores existem além do 1 e dele mesmo.
?>