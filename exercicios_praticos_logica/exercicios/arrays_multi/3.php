<?php

function SomaMatriz()
{

    $matriz = [
        [1, 1, 1],
        [4, 5, 6],
        [7, 8, 9]
    ];

    $total = 0;

    foreach($matriz as $linha){
        foreach($linha as $numero){
            $total += $numero;
        }
    }

    return $total;

}

$m = SomaMatriz();
print_r($m);