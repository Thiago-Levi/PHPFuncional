<?php

$duracaoEmSegundos = 300;

$horas = intval($duracaoEmSegundos / 3600);
$restoHora = $duracaoEmSegundos % 3600;
$minutos = intval($restoHora / 60);
$segundos = $restoHora % 60; 

echo($horas. ":" . $minutos . ":" . $segundos);



?>