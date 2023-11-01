<?php

$senha = "123456";

$opcao = ['cost' => 10];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $opcao);

echo "Senha: " . $senha . "<br>";
echo "Senha segura: " . $senhaSegura . "<br>";

echo "<hr>";

$senhaDB = '$2y$10$SIplftON16vs5LZ5k1vVKu0CGn0snVKJ/5sou0PbPFjkLLkdxrVQ6';

if(password_verify($senha, $senhaDB)):
    echo "Senha valida";
    else: echo "Senha invalida";
endif;
?>