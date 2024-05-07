<?php


echo("Base do retangulo: ");
$base = (float)trim(fgets(STDIN));

echo("Altura do retangulo: ");
$altura = (float)trim(fgets(STDIN));


function areaRetangulo(float $base, float $altura): float{
  return $base * $altura;
};
 
function perimetroRetangulo(float $base, float $altura): float{
  return ($base * 2) + ($altura * 2);  
};

function diagonalRetangulo(float $base, float $altura): float{
  return sqrt(($base * $base) + ($altura * $altura));  
};

$area = areaRetangulo($base, $altura);
$perimetro = perimetroRetangulo($base, $altura);
$diagonal = diagonalRetangulo($base, $altura);


echo("Area: $area\n");
echo("Perímetro: $perimetro\n");
echo("Diagonal: $diagonal\n");

?>