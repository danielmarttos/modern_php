<?php

/* Escreva um programa que faça a impressão de um título formatado e centralizado.
O sistema receberá o título desejado separado em 2 partes, sendo uma superior e
outra inferior, e o devolverá formatado e centralizado como no exemplo a seguir: */

function TituloFormata($titulo_supe,$titulo_inf){

    $monta = '';
    $monta .= ' ' . $titulo_supe . PHP_EOL . $titulo_inf;

    return $monta;

}

$titulos = TituloFormata('DSIN', 'TECNOLOGIA DA INFORMAÇÃO');
echo $titulos;