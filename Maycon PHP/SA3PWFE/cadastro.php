<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Valide os dados do formulário
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (empty($nome) || empty($usuario) || empty($senha)) {
        $erro = 'Todos os campos são obrigatórios.';
    } else {
        // Configurações de conexão com o banco de dados
        $host = 'localhost';
        $dbUsuario = 'seu_usuario';
        $dbSenha = 'sua_senha';
        $nomeBanco = 'sa3pwfe';

        // Conexão com o banco de dados
        $conexao = new mysqli($host, $dbUsuario, $dbSenha, $nomeBanco);

        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Query SQL para inserção de dados
        $query = "INSERT INTO clientes (img, admin, nome, sobrenome, nascimento, cpf, rua, n, complemento, cidade, uf, cep, email, senha) 
                  VALUES (?, false, ?, '', '', '', '', '', '', '', '', '', ?, ?)";
        $stmt = $conexao->prepare($query);

        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt->bind_param('ssssss', $nome, $usuario, $senhaHash);

        if ($stmt->execute()) {
            // Cadastro bem-sucedido
            header('Location: login.php'); // Redirecionar para a página de login
            exit();
        } else {
            $erro = 'Erro ao cadastrar. Tente novamente.';
        }

        // Fechar a conexão com o banco de dados
        $conexao->close();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Página de Cadastro</title>
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

        .cadastro-container {
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
            /* flex-direction: column; */
            justify-content: flex-wrap;
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

        .error-message {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="cadastro-container">
        <h2>Cadastro</h2>
        <?php if (isset($erro)) {
            echo '<p class="error-message">' . $erro . '</p>';
        } ?>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="img">Imagem:</label>
            <input type="text" id="img" name="img">

            <label for="nascimento">Nascimento:</label>
            <input type="text" id="nascimento" name="nascimento">

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf">

            <label for="rua">Rua:</label>
            <input type="text" id="rua" name="rua">

            <label for="n">N:</label>
            <input type="text" id="n" name="n">

            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento">

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade">

            <label for="uf">UF:</label>
            <input type="text" id="uf" name="uf">

            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep">

            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" required>

            <p>Já possui cadastro? 
            <a href="login.php">Clique aqui</a></p>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>

</html>
