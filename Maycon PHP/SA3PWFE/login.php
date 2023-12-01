<?php
session_start(); // Iniciar a sessão (se já não estiver iniciada)

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'sa3pwfe');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email']; // Alterado de 'usuario' para 'email'
    $senha = $_POST['senha'];

    // Use uma consulta preparada para evitar injeção de SQL
    $query = "SELECT senha FROM clientes WHERE email = ?"; // Alterado de 'usuario' para 'email'
    $stmt = mysqli_prepare($conexao, $query);

    // Associe os parâmetros
    mysqli_stmt_bind_param($stmt, "s", $email); // Alterado de 'usuario' para 'email'

    // Execute a consulta
    mysqli_stmt_execute($stmt);

    // Obtenha o resultado
    $resultado = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultado)) {
        // Verifique se a senha está correta usando password_verify
        if (password_verify($senha, $row['senha'])) {
            // As credenciais são válidas
            $_SESSION['email'] = $email; // Alterado de 'usuario' para 'email'
            header('Location: dashboard.php'); // Redirecionar para a página de painel
            exit();
        }
    }

    // Se chegou aqui, as credenciais são inválidas
    $erro = 'Credenciais inválidas. Tente novamente.';

    // Feche a consulta preparada
    mysqli_stmt_close($stmt);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="button"] {
            background-color: #ff9500;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 5px;
        }

        input[type="button"]:hover {
            background-color: #b36800;
        }

        p.error-message {
            color: #ff0000;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($erro)) {
            echo '<p class="error-message">' . $erro . '</p>';
        } ?>
         <form method="post">
            <label for="email">Email:</label> <!-- Alterado de 'usuario' para 'email' -->
            <input type="text" id="email" name="email" required> <!-- Alterado de 'usuario' para 'email' -->

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Login">
            <a href="cadastro.php"><input type="button" value="Cadastro"></a>
        </form>
    </div>
</body>

</html>
