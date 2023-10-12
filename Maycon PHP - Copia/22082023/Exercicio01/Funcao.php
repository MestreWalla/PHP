<?php

	function Soma($a,$b){
		return($a+$b);
	}
	function Subtracao($a,$b){
		return($a-$b);
	}
	function Multiplicacao($a,$b){
		return($a*$b);
	}
	function Divisao($a,$b){
		if ($a != 0){
			return ($a/$b);
		} else {
			return ("Não é possivel dividir por zero !!");	
		}
	}

?>