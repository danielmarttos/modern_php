<?php

function Xvenceu($jogo)
{

    $ganhou = 'X ganhou!';

    for ($i = 0; $i < 3; $i++) {

        if ($jogo[$i][0] == 'X' && $jogo[$i][1] == 'X' && $jogo[$i][2] == 'X') {
            return $ganhou;
        }
        if ($jogo[0][$i] == 'X' && $jogo[1][$i] == 'X' && $jogo[2][$i] == 'X') {
            return $ganhou;
        }

    }

    if ($jogo[0][0] == 'X' && $jogo[1][1] == 'X' && $jogo[2][2] == 'X') {
        return $ganhou;
    }
    if ($jogo[0][2] == 'X' && $jogo[1][1] == 'X' && $jogo[2][0] == 'X') {
        return $ganhou;
    }

    return 'X perdeu.';

}

$jogo1 = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];

$jogo2 = [
    ['X', '', 'O'],
    ['', 'X', ''],
    ['O', '', 'X']
];

$jogo3 = [
    ['X', 'X', 'O'],
    ['', 'O', ''],
    ['O', '', 'X']
];

$jogo4 = [
    ['X', 'O', 'O'],
    ['O', 'X', 'X'],
    ['O', 'X', 'O']
];

$x_verifica = Xvenceu($jogo2);
echo $x_verifica;