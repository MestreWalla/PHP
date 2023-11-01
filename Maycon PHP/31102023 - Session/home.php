<?php
// isset — Determine if a variable is declared and is different than null

    session_start(); // Inicia ou retoma a sessão
    if(isset($_SESSION['username'])) { // Verifica se a variável de sessão 'username' está definida
        var_dump($_SESSION['username']); // Exibe informações detalhadas sobre 'username' (para fins de depuração)
        echo "<br>"; // Insere uma quebra de linha para melhor formatação
        echo $_SESSION['username'] . "<br>"; // Exibe o valor da variável de sessão 'username'
        echo $_SESSION['password'] . "<br>"; // Tenta exibir o valor da variável de sessão 'password' (pode não estar definida)
        echo session_id() . "<br>"; // Exibe o ID da sessão atual (gerado automaticamente pelo PHP)
    }
?>

