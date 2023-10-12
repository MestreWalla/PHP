<?php
// EXERCICIO 01
function verificar($valor){
    if ($valor == 0) {
        $resultado = "Igual a zero";
    } else if ($valor > 0) {
        $resultado = " positivo";
    } else {
        $resultado = " negativo";
    }
    return $resultado;
}

// EXERCICIO 02
function tabuada($numero01) {
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero01 * $i;
        echo "$numero01 X $i = $resultado<br>";
    }
}
    
// EXERCICIO 03
    function calcularFatorial($n) {
        if ($n < 0) {
            return "Fatorial não definido para números negativos.";
        } elseif ($n == 0 || $n == 1) {
            return 1;
        } else {
            $fatorial = 1;
            for ($i = 2; $i <= $n; $i++) {
                $fatorial *= $i;
            }
            return $fatorial;
        }
    }

    // EXERCICIO 04
function calculadora($valor01, $valor02, $operacao) {
    $resultado = 0;

    if (!empty($valor01) && !empty($valor02)) {
        if ($operacao == "soma") {
            $resultado = $valor01 + $valor02;
        } elseif ($operacao == "subtracao") {
            $resultado = $valor01 - $valor02;
        } elseif ($operacao == "multiplicacao") {
            $resultado = $valor01 * $valor02;
        } elseif ($operacao == "divisao" && $valor02 != 0) {
            $resultado = $valor01 / $valor02;
        } else {
            echo "Operação inválida ou divisão por zero.";
        }
    } else {
        echo "Por favor, preencha ambos os valores.";
    }

    return $resultado;
}

// EXERCICIO 05
function parImpar($numero) {
    if (is_numeric($numero)) {
        if ($numero % 2 == 0) {
            $resultado = "O número $numero é par.";
        } else {
            $resultado = "O número $numero é ímpar.";
        }
    } else {
        $resultado = "Por favor, digite um número válido.";
    }
    return $resultado;
}

// EXERCICIO 06
function ordem($valorA, $valorB) {
    if (is_numeric($valorA) && is_numeric($valorB)) {
        if ($valorA < $valorB) {
            $resultado = "$valorA $valorB";
        } else {
            $resultado = "$valorB $valorA";
        }
    } else {
        $resultado = "Por favor, digite valores numéricos para A e B.";
    }
    return $resultado;
}

// EXERCICIO 07
function variavelMaiorMenor($valorA, $valorB) {
    if ($valorA > $valorB) {
        $resultado = "A maior que B";
    } elseif ($valorA < $valorB) {
        $resultado = "A menor que B";
    } else {
        $resultado = "A igual a B";
    }
    return $resultado;
}


// EXERCICIO 08
function mediaGeral($nota1, $nota2, $nota3) {
    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
        $notas = array($nota1, $nota2, $nota3);
        $media = array_sum($notas) / count($notas);

        $valores = "N1 = $nota1 | N2 = $nota2 | N3 = $nota3 | MG = " . number_format($media, 2);

        if ($media >= 6) {
            $resultado = " [Aprovado]" . " - " . "$valores";
        } else {
            $resultado = " [Reprovado]" . " - ". "$valores";
        }
    } else {
        $resultado = "Por favor, digite valores numéricos para as notas.";
    }
    return $resultado;
}

// EXERCICIO 09
function idade($nome, $idade) {
    if (is_numeric($idade)) {
        if ($idade >= 18) {
            $resultado = "$nome é maior de 18 e tem $idade anos.";
        } else {
            $resultado = "$nome não é maior de 18 e tem $idade anos.";
        }
    } else {
        $resultado = "Por favor, digite uma idade válida (número).";
    }
    return $resultado;
}

// EXERCICIO 10
function mes($numero) {
    if (is_numeric($numero)) {
        if ($numero >= 1 && $numero <= 12) {
            $meses = array(
                1 => "<b>Janeiro</b>",
                2 => "<b>Fevereiro</b>",
                3 => "<b>Março</b>",
                4 => "<b>Abril</b>",
                5 => "<b>Maio</b>",
                6 => "<b>Junho</b>",
                7 => "<b>Julho</b>",
                8 => "<b>Agosto</b>",
                9 => "<b>Setembro</b>",
                10 => "<b>Outubro</b>",
                11 => "<b>Novembro</b>",
                12 => "<b>Dezembro</b>"
            );
            $resultado = "Mês correspondente ao número $numero: " . $meses[$numero];
        } else {
            $resultado = "Não existe mês com o número $numero.";
        }
    } else {
        $resultado = "Por favor, digite um número válido (entre 1 e 12).";
    }
    return $resultado;
}
?>