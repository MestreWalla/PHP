<?php
// EXERCICIO 01
	function metrosComFolga($m2){
        $folga = 1.10;
	    return($m2 * $folga);
	}
    
    function latas18($resultado){
	    return(ceil($resultado / (18*3)));
    }
    function latas3($resultado){
        return(ceil($resultado / (3.6*3)));
    }
    function latas18v($resultado){
        return(latas18($resultado) * 80);
    }
    function latas3v($resultado){
        return(latas3($resultado) * 25);
    }
    function melhorCompra($resultado){
        $melhorOpcao = "";
        $melhorCusto = PHP_FLOAT_MAX; // Inicialize com um valor alto
        // Loop para considerar todas as combinações possíveis
        for ($qtdLatas18 = 0; $qtdLatas18 * 18 <= $resultado; $qtdLatas18++) {
            $restanteMetros = $resultado - ($qtdLatas18 * 18);
            $qtdLatas3 = ceil($restanteMetros / 3.6);
            $custoTotal = ($qtdLatas18 * 80) + ($qtdLatas3 * 25);
            if ($custoTotal < $melhorCusto) {
                $melhorCusto = $custoTotal;
                $melhorOpcao = "mas a melhor opçao de compra são $qtdLatas18 latas de 18 litros e $qtdLatas3 latas de 3,6 litros com valor de: R$ $custoTotal";
            }
        }
        return $melhorOpcao;
    }

// EXERCICIO 02
    function multiplicacaoPorSomasSucessivas($numero01, $numero02) {
        $resultado = 0;
        $i = 0;
        
        while ($i < $numero02) {
            $resultado += $numero01;
            $i++;
        }
        return $resultado;
    }

// EXERCICIO 03
    function divisaoPorSubtracoesSucessivas($maior, $menor) {
        $resultado = 0;
        
        while ($maior >= $menor) {
            $maior -= $menor;
            $resultado++;
        }
        
        return $resultado;
    }
    
// EXERCICIO 04
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