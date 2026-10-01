<?php

function Matriz($n)
{

    $matriz = [];

    for ($i = 0; $i < $n; $i++) {

        $atual = [];

        for ($f = 0; $f < $n; $f++) {

            $num = 0;
            array_push($atual, $num);

        }

        array_push($matriz, $atual);

    }

    $final = '';

    foreach ($matriz as $linha) {

        $num = '';
        $pula = '';

        foreach ($linha as $coluna) {
            $monta = $coluna . ' ';
            $num .= $monta;
        }
        $pula .= PHP_EOL;

        $final .= $num . $pula;
    }

    return $final;

}

$m = Matriz(3);
echo $m;