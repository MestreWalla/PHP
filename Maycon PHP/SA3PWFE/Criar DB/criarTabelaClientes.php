<?php
$sql_clientes = "CREATE TABLE clientes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(255),
    admin BOOLEAN,
    nome VARCHAR(30) NOT NULL,
    sobrenome VARCHAR(30) NOT NULL,
    nascimento DATE,
    cpf VARCHAR(14) NOT NULL,
    rua VARCHAR(255),
    n VARCHAR(10),
    complemento VARCHAR(50),
    cidade VARCHAR(50),
    uf VARCHAR(2),
    cep VARCHAR(10),
    email VARCHAR(50) UNIQUE,
    senha VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_clientes) === TRUE) {
    echo "Tabela clientes criada com sucesso";
} else {
    echo "Erro ao criar tabela clientes: " . $conn->error;
}
