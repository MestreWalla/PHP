<?php

include_once("conexao.php");

//Verificando a conexão
if(!$conn){
	die("Falha na conexão".mysql_connect_error());
}
echo "conectado com sucesso!";
mysqli_close($conn);

?>