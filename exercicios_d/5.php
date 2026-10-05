<?php


function PlacaPadrao($placa)
{
    $corresponde = $placa;
    $padrao = '';
    $brasil = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $mercosul = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'I'];

    if (is_numeric($placa[4])) {

        if (
            (IntlChar::isupper($placa[0])) &&
            (IntlChar::isupper($placa[1])) &&
            (IntlChar::isupper($placa[2])) &&
            (is_numeric($placa[3])) &&
            (is_numeric($placa[4])) &&
            (is_numeric($placa[5])) &&
            (is_numeric($placa[6]))
        ) {

            $padrao = 'Brasil';
            $numero = $corresponde[4];
            $corresponde[4] = $mercosul[$numero];
        } else {
            return 'Formato inválido';
        }
    } elseif (is_numeric($placa[4]) == False) {

        if (
            (IntlChar::isupper($placa[0])) &&
            (IntlChar::isupper($placa[1])) &&
            (IntlChar::isupper($placa[2])) &&
            (is_numeric($placa[3])) &&
            (IntlChar::isupper($placa[4])) &&
            (is_numeric($placa[5])) &&
            (is_numeric($placa[6]))
        ) {
            $padrao = 'Mercosul';
            $letra = $corresponde[4];
            $posicao = array_search($letra, $mercosul);
            $corresponde[4] = $brasil[$posicao];
        } else {
            return 'Formato inválido';
        }

    }

    return "
    Para a Placa {$placa}:
    Padrão: {$padrao};
    Correspondente : {$corresponde}.
    ";
}

$carro_placa = PlacaPadrao('ABC1C34');
echo $carro_placa;