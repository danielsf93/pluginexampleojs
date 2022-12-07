<?php

class Cabelo
{
    public $Cor;
    public $Tamanho;
}

$cabelo_Talita = new Cabelo;
$cabelo_Talita->Cor = "Azul";
$cabelo_Talita->Tamanho = "Grande";

$cabelo_Thiago = new Cabelo;
$cabelo_Thiago->Cor = "Castanho";
$cabelo_Thiago->Tamanho = "Medio";

echo("\nO cabelo da Talita é " . $cabelo_Talita->Cor);
echo("\nO cabelo da Thiago é " . $cabelo_Thiago->Cor);