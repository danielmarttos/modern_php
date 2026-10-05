<?php

function VerificaValor($a,$b,$c,$d){
    if(($b > $c) && ($d > $a) && ($c+$d) > ($a+$b) && ($c > 0) && ($d > 0) && ($a%2 == 0)){
        return "Valores aceitos";
    }else{
        return "Valores não aceitos";
    }
}

$valor = VerificaValor(8,10,9,13);
echo $valor;