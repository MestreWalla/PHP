<?php
    $lifetime = 10; // Define o tempo de vida da sessão em segundos (10 segundos neste caso).

    session_set_cookie_params(['lifetime' => $lifetime, 'httpOnly' => true]); // Configura os parâmetros do cookie de sessão para torná-lo seguro, incluindo a definição do tempo de vida da sessão.

    session_start(); // Inicia a sessão. Se a sessão já estiver iniciada, ela será retomada.

    var_dump(session_id()); // Exibe o ID da sessão atual.

    session_regenerate_id(); // Regenera o ID da sessão. Isso é uma medida de segurança que ajuda a evitar ataques de sessão.

    $_SESSION['nome'] = "Maria Silva"; // Define uma variável de sessão chamada 'nome' com o valor "Maria Silva".

    echo "<a href='sessao01.php'><button>Teste Sessão 01</button></a>"; // Exibe um link para outra página chamada 'sessao01.php' para fins de teste.
?>
