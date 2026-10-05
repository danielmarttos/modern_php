<?php

function Sequencia($n)
{
    $resultado = '';
    for ($i = 1; $i <= $n; $i++) {

        if ($i % 2 == 0) {
            $total = 0;

            for ($f = 1; $f <= $n; $f++) {
                if (($i != $f) && ($i % $f == 0)) {
                    $total += $f;
                }
            }
            if ($total == $i) {
                $resultado .= "$i: numero perfeito \n";
            } else {
                $resultado .= "$i: numero par \n";
            }

        } else {
            $total = 0;

            for ($f = 1; $f <= $n; $f++) {
                if (($i != $f) && ($i % $f == 0) && ($f != 1)) {
                    $total += $f;
                }
            }
            if ($total > 0) {
                $resultado .= "$i: numero impar \n";
            } else {
                $resultado .= "$i: numero primo \n";
            }

        }

    }

    return ($resultado);

}

$seq = Sequencia(20);
echo $seq;
