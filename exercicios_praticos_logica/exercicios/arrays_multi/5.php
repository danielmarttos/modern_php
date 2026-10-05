<?php

function MatrizDiagonalPrincipal()
{

    $matriz = [
        [2, 0, 0],
        [0, 5, 0],
        [0, 0, 2]
    ];

    $diagonal = [];

    for ($i = 0; $i < 3; $i++) {
        $diagonal[$i] = $matriz[$i][$i];
    }

    return implode(' ', $diagonal) . PHP_EOL;

}

$m = MatrizDiagonalPrincipal();
echo $m;