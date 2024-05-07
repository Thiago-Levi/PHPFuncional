<?php

$raio = 2.00;

function areaCirculo($raio):float{
  return 3.1413 * pow($raio, 2);
}

$area = areaCirculo($raio);

echo("Raio: $area");


?>