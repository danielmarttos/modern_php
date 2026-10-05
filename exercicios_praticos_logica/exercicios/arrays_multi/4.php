<?php

function MatrizMaiorNumero()
{

    $matriz = [
        [13, 2, 3, 23],
        [4, 5, 78, 7],
        [7, 8, 66, 8]
    ];

    $maior = $matriz[0][0];

    for ($i = 0; $i < 3; $i++) {

        for ($f = 0; $f < 3; $f++) {

            $numero = $matriz[$i][$f];

            if ($numero > $maior) {

                $maior = $numero;
                $y = $i;
                $x = $f;

            }

        }
    }

    return "O maior é {$maior}, na posição x: {$x} e y: {$y}";

}

$m = MatrizMaiorNumero();
echo $m;