<?php

function CalculaSalarioLiquido($hora, $valor, $dias) {

    $mes = ($valor*$hora)*$dias;
    $liquido = $mes-($mes*0.15);

    return $liquido;

}

$salario = CalculaSalarioLiquido(8,10,20);
echo $salario;