<?php

class Graduação
{
    public $curso;
}

$graduação_do_daniel = new Graduação;
$graduação_do_daniel->curso = 'geografia';

$graduação_da_talita = new Graduação;
$graduação_da_talita->curso = 'geografia';

$graduação_da_yasmin = new Graduação;
$graduação_da_yasmin->curso = 'ciências sociais, o melhor';

$graduação_do_pedro = new Graduação;
$graduação_do_pedro->curso = 'história';

echo "\n o curso do daniel é " . $graduação_do_daniel->curso;

echo "\n o curso da talita é " . $graduação_da_talita->curso;

echo "\n o curso do pedro é " . $graduação_do_pedro->curso;

echo "\n o curso da yasmin é " . $graduação_da_yasmin->curso;