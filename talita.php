<?php
echo "talita  ventura";

class Instituto
{
    public $nome;
    public $cursos;
}

$fflch = new Instituto;
$fflch->nome = 'Faculdade de Filosofia Letras e ciências humanas';
$fflch->curso = ['geografia','filosofia'];

echo "\n A melhor faculdade é a" . $fflch->nome;
