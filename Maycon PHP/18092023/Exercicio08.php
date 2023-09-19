<?php
function isPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

echo "Números primos até 1000:<br>";
for ($i = 2; $i <= 1000; $i++) {
    if (isPrimo($i)) {
        echo $i . " ";
    }
}
?>
