<?php

class sala
{
    public $mesas;
    public $cadeiras;
    public $lampadas;

    }
$sala_01 = new sala;
$sala_01->mesas ='marrom';
$sala_01->cadeiras ='pretas';
$sala_01->lampadas ='redondas';
 
 echo "\nAs mesas da sala 01 são da cor " . $sala_01->mesas . ". Esta sala possui cadeiras " . $sala_01->cadeiras . " e lampadas " . $sala_01->lampadas . "\n";


 $sala_02 = new sala;
 $sala_02->mesas ='branca';
 $sala_02->cadeiras ='amarelas';
 $sala_02->lampadas ='quadradas';
  
  echo "\nAs mesas da sala 02 são da cor " . $sala_02->mesas . ". Esta sala possui cadeiras " . $sala_02->cadeiras . " e lampadas " . $sala_02->lampadas . "\n";
 


