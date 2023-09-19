<?php
function nomeDoMes($numero) {
    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );
    
    if ($numero >= 1 && $numero <= 12) {
        return $meses[$numero];
    } else {
        return "Não existe mês com este número.";
    }
}

$numeroMes = 9; // Número do mês a ser convertido
$nomeMes = nomeDoMes($numeroMes);

echo $nomeMes;
?>
