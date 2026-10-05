<?php

function MatrizInversao()
{

    $matriz = [
        [1, 1, 1],
        [2, 2, 2],
        [3, 3, 3]
    ];

    $matrizinversa = [];

    for ($i = 0; $i < 3; $i++) {
        for ($f = 0; $f < 3; $f++) {
            $matrizinversa[$f][$i] = $matriz[$i][$f];
        }
    }

    $final = '';

    foreach ($matrizinversa as $linha) {
        $final .= implode(' ', $linha) . PHP_EOL;
    }

    return $final;

}

$m = MatrizInversao();
echo $m;