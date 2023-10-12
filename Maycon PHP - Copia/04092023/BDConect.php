<?php
	//Dados de conexão com a base de dados
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banco";

	//Criar a conexao com o banco de dados
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// $conn = new mysqli($severname, $username, $password, $dbname);

	//Verificando conexao
	if(!$conn){
		die("Falha na conexao!" . mysqli_connect_error());
	}
	echo "Conectado com sucesso";
	mysqli_close($conn);

?>