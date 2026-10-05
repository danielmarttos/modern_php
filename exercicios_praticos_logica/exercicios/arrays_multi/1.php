<?php

function Matriz($n)
{

    $matriz = [];
    $num = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($f = 0; $f < $n; $f++) {
            $matriz[$i][$f] = $num;
        }
    }

    $final = '';

    foreach ($matriz as $linha) {
        $final .= implode(' ', $linha) . PHP_EOL;
    }

    return $final;

}

$m = Matriz(3);
echo $m;