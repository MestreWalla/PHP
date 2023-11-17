<?php
$sql_carrinho = "CREATE TABLE carrinho (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(255),
    nome VARCHAR(50) NOT NULL,
    descricao TEXT,
    valor DECIMAL(10,2) NOT NULL,
    quantidade INT(6) NOT NULL
)";

if ($conn->query($sql_carrinho) === TRUE) {
    echo "Tabela carrinho criada com sucesso";
} else {
    echo "Erro ao criar tabela carrinho: " . $conn->error;
}
