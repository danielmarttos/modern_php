<?php

function BatalhaNaval($linha, $coluna)
{
    $matriz = [];

    for ($i = 0; $i < 5; $i++) {
        for ($f = 0; $f < 5; $f++) {
            $matriz[$i][$f] = 0;
        }
    }

    for ($i = 0; $i < 3; $i++) {
        $navio_linha = rand(0, 4);
        $navio_numero = rand(0, 4);
        if($matriz[$navio_linha][$navio_numero] != 1){
            $matriz[$navio_linha][$navio_numero] = 1;
        }else{
            $i--;
        }
        
    }

    if($matriz[$linha][$coluna] == 0){
        return 'Água';
    }else{
        return 'Navio';
    }
}

$m = BatalhaNaval(2, 2);
echo $m;