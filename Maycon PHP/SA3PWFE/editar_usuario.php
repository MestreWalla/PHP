<?php
session_start();
include('conectar.php');
include('dashboardClientes.php');

// Verifique se a sessão já está iniciada no arquivo dashboardClientes.php antes de incluí-lo

if(isset($_GET['email'])) {
    $emailCliente = urldecode($_GET['email']);
    $cliente = obterClientePorEmail($conexao, $emailCliente);

    if($cliente) {
        // Restante do seu código para exibir o formulário de edição
        ?>

        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Usuário</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }

                form {
                    width: 50%;
                    margin: 20px auto;
                }

                input {
                    display: block;
                    margin-bottom: 10px;
                }
            </style>
        </head>

        <body>
            <h2>Editar Usuário</h2>
            <form action="processar_edicao.php" method="post">
                <table>
                    <tr>
                        <th>Admin</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nascimento</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                    <td><input type="text" name="adm" value="<?= htmlspecialchars($cliente['adm']) ?>" required></td>
                    <td><input type="text" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required></td>
                    <td><input type="text" name="sobrenome" value="<?= htmlspecialchars($cliente['sobrenome']) ?>" required>
                    </td>
                    <td><input type="text" name="nascimento" value="<?= htmlspecialchars($cliente['nascimento']) ?>" required>
                    </td>
                    <td><input type="text" name="rua" value="<?= htmlspecialchars($cliente['rua']) ?>" required></td>
                    <td><input type="hidden" name="email" value="<?= htmlspecialchars($cliente['email']) ?>"></td>
                    <!-- Campo oculto para o e-mail do cliente -->
                    <td>
                        <input type="submit" value="Salvar Edições">
                        <a href="http://localhost/php/Maycon%20PHP/SA3PWFE/dashboardClientes.php"><input type="button"
                                value="Cancelar"></a>
                    </td>
                </table>
            </form>
        </body>

        </html>
        <?php
    } else {
        echo "Cliente não encontrado.";
    }
} else {
    echo "E-mail do cliente não fornecido.";
}
?>