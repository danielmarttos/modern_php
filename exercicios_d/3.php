<?php

function ValorCarro($valor){

$distribuidor = $valor*0.125;
$impostos = $valor*0.33;
$promocao = $valor*0.05;
$liquido = $valor-$promocao;

return "\n
        Valor do distribuidor: {$distribuidor} \n
        Valor dos impostos: {$impostos} \n
        Valor do carro: {$valor} \n
        Valor do desconto: {$promocao} \n
        Valor do carro com desconto: {$liquido} \n";

}

$valor = ValorCarro(200000);
echo $valor;