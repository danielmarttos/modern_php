<?php

function MatrizMod($size, $num, $x, $y, $mod)
{

    $matriz = [];

    for ($i = 0; $i < $size; $i++) {
        for ($f = 0; $f < $size; $f++) {
            $matriz[$i][$f] = $num;
        }
    }

    if($size > $x && $size > $y) {

        $matriz[$y][$x] = $mod;
        
    }

    $final = '';

    foreach ($matriz as $linha) {
        $final .= implode(' ', $linha) . PHP_EOL;
    }

    return $final;

}

$m = MatrizMod(4, 0, 2, 2, 1);
echo ($m);