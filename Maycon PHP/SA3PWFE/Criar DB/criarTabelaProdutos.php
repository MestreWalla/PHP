<?php
$sql_produtos = "CREATE TABLE produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(255),
    nome VARCHAR(50) NOT NULL,
    descricao TEXT,
    valor DECIMAL(10,2) NOT NULL,
    tag1 VARCHAR(30),
    tag2 VARCHAR(30),
    tag3 VARCHAR(30)
)";

if ($conn->query($sql_produtos) === TRUE) {
    echo "Tabela produtos criada com sucesso";
} else {
    echo "Erro ao criar tabela produtos: " . $conn->error;
}
