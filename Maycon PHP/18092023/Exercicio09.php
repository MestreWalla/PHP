<?php
function isNumeroPerfeito($numero) {
    $somaFatores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i === 0) {
            $somaFatores += $i;
        }
    }
    return $somaFatores === $numero;
}

echo "Números perfeitos até 1000:<br>";
for ($i = 1; $i <= 1000; $i++) {
    if (isNumeroPerfeito($i)) {
        echo $i . " ";
    }
}
?>
