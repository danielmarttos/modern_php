<?php

function isBalanceado($string) {
    $pilha = [];
    $mapa = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        // Se for caractere de abertura, empilha
        if (in_array($char, ['(', '{', '['])) {
            array_push($pilha, $char);
        } 
        // Se for caractere de fechamento, verifica o topo da pilha
        elseif (array_key_exists($char, $mapa)) {
            $topo = array_pop($pilha);
            if ($mapa[$char] !== $topo) {
                return false;
            }
        }
    }

    return empty($pilha);
}

echo isBalanceado("{[()]}") ? "Válido\n" : "Inválido\n";