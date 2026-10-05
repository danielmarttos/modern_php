<?php

function gerarCaracol($n) {
    $matriz = [];
    // Inicializa a matriz com zeros
    for ($i = 0; $i < $n; $i++) {
        $matriz[$i] = array_fill(0, $n, 0);
    }

    $linhaInicio = 0;
    $linhaFim = $n - 1;
    $colunaInicio = 0;
    $colunaFim = $n - 1;
    $contador = 1;

    while ($linhaInicio <= $linhaFim && $colunaInicio <= $colunaFim) {
        // Preenche a borda superior (esquerda -> direita)
        for ($i = $colunaInicio; $i <= $colunaFim; $i++) {
            $matriz[$linhaInicio][$i] = $contador++;
        }
        $linhaInicio++;

        // Preenche a borda direita (cima -> baixo)
        for ($i = $linhaInicio; $i <= $linhaFim; $i++) {
            $matriz[$i][$colunaFim] = $contador++;
        }
        $colunaFim--;

        // Preenche a borda inferior (direita -> esquerda)
        if ($linhaInicio <= $linhaFim) {
            for ($i = $colunaFim; $i >= $colunaInicio; $i--) {
                $matriz[$linhaFim][$i] = $contador++;
            }
            $linhaFim--;
        }

        // Preenche a borda esquerda (baixo -> cima)
        if ($colunaInicio <= $colunaFim) {
            for ($i = $linhaFim; $i >= $linhaInicio; $i--) {
                $matriz[$i][$colunaInicio] = $contador++;
            }
            $colunaInicio++;
        }
    }

    return $matriz;
}

// Imprime a matriz no terminal
$resultado = gerarCaracol(4);
foreach ($resultado as $linha) {
    echo implode("\t", $linha) . "\n";
}