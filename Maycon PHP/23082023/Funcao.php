<?php

// //Escreva um script que pede o raio de um círculo, e em seguida exiba seu perímetro e área. Para saber o valor do pi, use: M_PI (ele armazena o valor de pi)
// -> π = 3.1415926535898

	function Perimetro($a,$M_PI){
		return($a*2*$M_PI);
	}

// Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius. Peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit

	function Farenheit($Fg, $Cg){
		return((9/5)*$Cg + 32);
	}

	function Celsius($Cg, $Fg){
		return(($Fg-32)*5/9);
	}

// Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um script que nos dê:
// - salário bruto.
// - quanto pagou ao INSS.
// - quanto pagou ao sindicato.
// - o salário líquido.
// - calcule os descontos e o salário líquido, conforme a tabela abaixo:

	function SalarioB($Salario, $IR, $INSS, $Sindicato){
		return($Salario-$IR-$INSS-$Sindicato);
	}

?>