<?php

// forma 01
	$x = 4;
	while ($x <= 5) {
		echo "Numero: $x <br>";
		$x++;
	}
	echo("<hr>");
// forma 02
	do {
		echo "Numero: $x \n";
		$x = $x +1;
	} while ($x <= 5);
	echo("<hr>");
// forma 03
	for ($i = 1; $i <= 10; $i++) {
		echo $i . "<br>" . "\n"; // pular linha com (\n para prompt) e (<br> para navegador)
	}
	echo("<hr>");
// forma 04
	$cores = array("verde,"." amarelo,"." azul,"." branco,");
	foreach ($cores as $cor) {
		echo "Cor: $cor <br>";
	}
	echo("<hr>");

// Exercicio

	//Receba quatro notas de um aluno e calcule a sua media, dizendo se ele foi:
	//A - Aprovado - >=7
	//B - Exame - média >=5
	//C - Reprovado - média<5
	$nota01 = 05;
	$nota02 = 03;
	$nota03 = 06;
	$nota04 = 02;
	$resultado = 0;

	$media = $nota01+$nota02+$nota03+$nota04;
	echo "Media = ".$media." - ";

	if ($media >= 7) {
		$resultado = 0;
	} elseif ($media >= 5) {
		$resultado = 1;
	} else {
		$resultado = 2;
	}

	switch ($resultado) {
	case 0:
		echo "Aprovado";
		break;
	case 1:
		echo "Exame";
		break;
	default:
	echo "Reprovado";
}
?>