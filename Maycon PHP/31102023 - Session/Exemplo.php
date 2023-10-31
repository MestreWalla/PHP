<?php
    session_start();
    $_SESSION['nome'] = "Maria Silva";
    echo "<a href='sessao01.php'><button>Teste Sessão 01</button></a>";
?>