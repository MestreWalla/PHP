<?php
	function metrosComFolga($m2){
        $coberturaPorLitro = 3; //cobertura da tinta 3m²/Litro
        $folga = 1.10;
	return($m2 * $folga);
	}
    
    //18l R$80,00
    //3,6l R$25,00
    function latas18($resultado){
	return($resultado / 18);
    }
    function latas3($resultado){
        return($resultado / 3.6);
    }
    function latas18v($resultado){
        return($resultado / 18);
    }
    function latas3v($resultado){
            return($resultado / 3.6);
    }
?>