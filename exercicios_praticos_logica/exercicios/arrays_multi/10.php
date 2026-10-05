<?php

function Radar($campo, $linha, $coluna)
{

    $total = 0;
    $linhas = count($campo);
    $colunas = count($campo[0]);

    for ($i = 0; $i < $linhas; $i++) {
        for ($f = 0; $f < $colunas; $f++) {
            
        }
    }

    return $total;

}

$campo1 = [
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]
];

$campo2 = [
    [0, 1, 0, 0],
    [1, 0, 0, 0],
    [0, 0, 0, 1],
    [0, 1, 0, 0]
];

$radar = Radar($campo1, 0, 0);
echo $radar;