<?php

echo "Olá, qual é a temperatura?\n";  

$temperatura = readline(">> ");

$num = $temperatura;

if ($num >=30) {
  echo "Nossa, $temperatura graus! Está calor!";
} elseif ($num <=15) {
    echo "Eita, $temperatura graus? Está muito frio.";
} elseif ($num >=50) {
    echo "Sai daí, $temperatura graus? VOCÊ VAI FRITAR!!!!";
} else {
    echo "Tranquilo, $temperatura graus está na média.";
}
