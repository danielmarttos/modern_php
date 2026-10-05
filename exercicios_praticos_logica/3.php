<?php

function contarFrequencia($texto) {
    // Limpa a string e divide em array
    $texto = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $texto));
    $palavras = explode(' ', $texto);
    $frequencia = [];

    foreach ($palavras as $palavra) {
        if ($palavra === "") continue;
        
        if (!isset($frequencia[$palavra])) {
            $frequencia[$palavra] = 0;
        }
        $frequencia[$palavra]++;
    }

    // Ordena do valor mais alto para o mais baixo mantendo as chaves
    arsort($frequencia); 
    return $frequencia;
}

print_r(contarFrequencia("Docker, PHP, MySQL e Docker, PHP, PHP!"));