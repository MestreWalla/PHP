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
?>