<?php

function MatrizMod($size, $num, $x, $y, $mod)
{

    $matriz = [];

    for ($i = 0; $i < $size; $i++) {

        $atual = [];

        for ($f = 0; $f < $size; $f++) {

            array_push($atual, $num);

        }

        array_push($matriz, $atual);

    }

    if($num != $mod) {

        $matriz[$y][$x] = $mod;
        
    }

    $final = '';

    foreach ($matriz as $linha) {

        $num = '';
        $pula = '';

        foreach ($linha as $numero) {

            $monta = $numero . ' ';
            $num .= $monta;

        }
        $pula .= PHP_EOL;

        $final .= $num . $pula;
    }

    return $final;

}

$m = MatrizMod(3, 0, 1, 1, 1);
echo ($m);