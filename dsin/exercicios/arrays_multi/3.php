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

    if($num != $mod && $mod > -1) {

        $matriz[$y][$x] = $mod;
        
    }

    $total = 0;

    foreach($matriz as $linha){
        foreach($linha as $numero){
            $total += $numero;
        }
    }

    return $total;

}

$m = MatrizMod(3, 2, 0, 0, -1);
print_r($m);