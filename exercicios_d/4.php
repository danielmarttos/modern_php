<?php

function CaixaEletronico($valor){
    $cem = intdiv($valor, 100);
    $resto = $valor%100;
    $cinquenta = intdiv($resto, 50);
    $resto %= 50;
    $vinte = intdiv($resto, 20);
    $resto %= 20;
    $dez = intdiv($resto, 10);
    $resto %= 10;
    $cinco = intdiv($resto, 5);
    $resto %= 5;
    $dois = intdiv($resto, 2);
    $resto %= 2;
    $um = $resto;

    return "
    ● {$cem} nota(s) de R$ 100,00
    ● {$cinquenta} nota(s) de R$ 50,00
    ● {$vinte} nota(s) de R$ 20,00
    ● {$dez} nota(s) de R$ 10,00
    ● {$cinco} nota(s) de R$ 5,00
    ● {$dois} nota(s) de R$ 2,00
    ● {$um} nota(s) de R$ 1,00
    ";
}

$notas = CaixaEletronico(576);
echo $notas;