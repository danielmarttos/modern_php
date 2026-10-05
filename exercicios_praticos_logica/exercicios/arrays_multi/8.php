<?php

function SomaMatrizes($m1, $m2)
{

    $matriz = [];
    $qnt_linha = count($m1);
    $qnt_coluna = count($m1[0]);

    for ($i = 0; $i < $qnt_linha; $i++) {
        for ($f = 0; $f < $qnt_coluna; $f++) {
            $matriz[$i][$f] = $m1[$i][$f] + $m2[$i][$f];
        }
    }

    $final = '';

    foreach($matriz as $linha) {
        $final .= implode(' ', $linha). PHP_EOL;
    }

    return $final;

}

$matriz1 = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$matriz2 = [
    [5, 5, 5],
    [4, 4, 4],
    [3, 3, 3]
];

$m3 = SomaMatrizes($matriz1, $matriz2);
echo $m3;