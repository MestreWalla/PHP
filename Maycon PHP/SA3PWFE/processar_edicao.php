<?php
session_start();
include('conectar.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processar dados do formulário de edição
    $emailCliente = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    // Adicione outros campos conforme necessário

    // Executar a atualização usando declaração preparada
    $queryUpdate = "UPDATE clientes SET nome=?, sobrenome=? WHERE email=?";
    $stmtUpdate = $conexao->prepare($queryUpdate);

    if ($stmtUpdate) {
        $stmtUpdate->bind_param('sss', $nome, $sobrenome, $emailCliente);
        $stmtUpdate->execute();

        if ($stmtUpdate->affected_rows > 0) {
            $stmtUpdate->close();
            header('Location: dashboardClientes.php?edit_success=true');
            exit();
        } else {
            echo "Erro ao atualizar o usuário. Erro: " . $stmtUpdate->error;
        }
    } else {
        echo "Erro na preparação da consulta de atualização.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
