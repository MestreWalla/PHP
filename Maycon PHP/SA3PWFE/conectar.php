<?php
$servername = "127.0.0.1";
$username = "admin";
$password = "";
$dbname = "sa3pwfe";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
