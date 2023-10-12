<?php

	// $nome = $_POST['nome']; <<<<<<<OU>>>>>>> $nome = $_GET['nome'];

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];

	echo "olá $nome, tudo bem?";
	echo "<br>";
	echo "Segue suas informaçoes abaixo:";
	echo "<br>";
	echo "<br>";
	echo "Nome: $nome";
	echo "<br>";
	echo "Email: $email";
	echo "<br>";
	echo "Endereço: $endereco";
	echo "<br>";
	echo "Telefone: $telefone";

	echo "<style> body {background-color: black; color: white;} </style>";

?>