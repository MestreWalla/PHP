<?php

	include "Funcao.php";
	$x = $_POST['num1'];
	$y = $_POST['num2'];

	echo "Resultado: $x + $y = ".soma($x,$y);
	echo "<br>";

	echo "<style> body {background-color: black; color: white;} </style>";

?>