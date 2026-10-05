<?php

class Pato
{

    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getPato()
    {
        return $this->nome;
    }

    public function quack($n)
    {
        $quacks = '';
        for ($i = 0; $i < $n; $i++) {
            $quacks .= '🦆 QUACK' . PHP_EOL;
        }
        return $quacks;
    }

}

$pato = new Pato('Donald');
echo $pato->getPato() . PHP_EOL;
echo $pato->quack(3);