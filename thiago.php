<?php

class Carro
{
    public $cor;
    public $portas;
}

$carro_da_talita = new Carro;
$carro_da_talita->cor = 'azul';
$carro_da_talita->portas = 2;


$carro_do_daniel = new Carro;
$carro_do_daniel->cor = 'verde';
$carro_do_daniel->portas = 5;

echo "\nO carro da Talita é: " . $carro_da_talita->cor;

echo "\nO carro do Daniel é: " . $carro_do_daniel->cor;

