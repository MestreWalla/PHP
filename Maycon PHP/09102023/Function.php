<?php
// EXERCICIO 01
	function verificar($valor){
        if ($valor == 0) {
            $resultado = "Igual a zero";
        } else if ($valor <= 1) {
            $resultado = "Valor positivo";
        } else {
            $resultado = "Valor negativo";
        }
	    return($resultado);
	}

// EXERCICIO 02
function tabuada($numero01) {
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero01 * $i;
        echo "$numero01 X $i = $resultado<br>";
    }
}

// EXERCICIO 04
    function divisaoPorSubtracoesSucessivas($maior, $menor) {
        $resultado = 0;
        
        while ($maior >= $menor) {
            $maior -= $menor;
            $resultado++;
        }
        
        return $resultado;
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

// EXERCICIO 05
function calcularConsumoCusto($quilometragem, $consumoLitros, $precoLitro) {
    $consumoMedio = $quilometragem / $consumoLitros;
    $custoPorQuilometro = $precoLitro / $consumoMedio;
    
    $resultados = array(
        "Consumo Médio (km/l)" => $consumoMedio,
        "Custo por Quilômetro" => $custoPorQuilometro
    );
    
    return $resultados;
}

// EXERCICIO 06
function verificarTriangulo($a, $b, $c) {
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        return "Os lados formam um triângulo.";
    } else {
        return "Os lados não formam um triângulo.";
    }
}
function verificarTipoTriangulo($a, $b, $c) {
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        return "O tipo do triângulo é: Escaleno."; // Triângulo válido, mas pode ser escaleno
    } else if ($a == $b && $b == $c) {
        return "O tipo do triângulo é: Equilátero."; // Todos os lados são iguais
    } else if ($a == $b || $a == $c || $b == $c) {
        return "O tipo do triângulo é: Isósceles."; // Dois lados são iguais
    } else {
        return "Não é um triângulo válido."; // Triângulo inválido
    }
}


// EXERCICIO 07
function nomeDoMes($numero) {
    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );
    
    if ($numero >= 1 && $numero <= 12) {
        return $meses[$numero];
    } else {
        return "Não existe mês com este número.";
    }
}

// EXERCICIO 08
function isPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

// EXERCICIO 09
function isNumeroPerfeito($numero) {
    $somaFatores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i === 0) {
            $somaFatores += $i;
        }
    }
    return $somaFatores === $numero;
}

// EXERCICIO 10
function calcularPorcentagem($valor, $porcentagem) {
    return ($porcentagem / 100) * $valor;
}
?>