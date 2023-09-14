<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    header("Location: erro.html");
    exit();
} else {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $dataNasc = $_POST['dataNasc'];

    $sql = "INSERT INTO usuario (nome, endereco, email, sexo, dataNasc)
            VALUES ('$nome', '$endereco', '$email', '$sexo', '$dataNasc')";

    if ($conn->query($sql) === TRUE) {
        header("Location: sucesso.html");
        exit();
    } else {
        header("Location: erro.html");
        exit();
    }
}
$conn->close();
?>