<?php
// Configurações de conexão com o banco de dados
$host = '127.0.0.1';
$dbUsuario = 'root';
$dbSenha = '';
$nomeBanco = 'sa3pwfe';

// Conexão com o banco de dados
$conexao = new mysqli($host, $dbUsuario, $dbSenha, $nomeBanco);

if($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: ".$conexao->connect_error);
}

// Função para excluir um usuário pelo ID
if(isset($_GET['delete'])) {
    $idUsuario = $_GET['delete'];
    $queryDelete = "DELETE FROM clientes WHERE id_cliente = ?";
    $stmtDelete = $conexao->prepare($queryDelete);
    $stmtDelete->bind_param('i', $idUsuario);
    $stmtDelete->execute();
    $stmtDelete->close();

    // Redirecionar de volta para a página de lista após a exclusão
    header('Location: lista_usuarios.php');
    exit();
}

// Consulta para selecionar todos os registros da tabela "clientes"
$query = "SELECT * FROM clientes";
$resultado = $conexao->query($query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .edit-button {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>
    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Admin</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Nascimento</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Usuário</th>
            <th>Ações</th>
        </tr>
        <?php
        if($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".(isset($row['id_cliente']) ? $row['id_cliente'] : '')."</td>";
                echo "<td>".$row['img']."</td>";
                echo "<td>".($row['admin'] ? 'Sim' : 'Não')."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['sobrenome']."</td>";
                echo "<td>".$row['nascimento']."</td>";
                echo "<td>".$row['cpf']."</td>";
                echo "<td>".$row['rua'].", ".$row['n']." - ".$row['cep']." - ".$row['cidade']." - ".$row['uf']." - ".$row['complemento']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td>".$row['usuario']."</td>";
                echo "<td>
                <a class='edit-button' href='editar_usuario.php?id=".(isset($row['id_cliente']) ? $row['id_cliente'] : '')."'>Editar</a>
                <a class='delete-button' href='lista_usuarios.php?delete=".(isset($row['id_cliente']) ? $row['id_cliente'] : '')."' onclick='return confirm(\"Tem certeza que deseja excluir este cliente?\")'>Excluir</a>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='18'>Nenhum registro encontrado.</td></tr>";
        }
        ?>
    </table>
</body>

</html>

<?php
// Fechar a conexão com o banco de dados
$conexao->close();
?>