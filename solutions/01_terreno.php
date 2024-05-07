<?php

echo("Digite a largura do terreno: ");
$largura = (float) trim(fgets(STDIN));

echo("Digite o comprimento do terreno: ");
$altura = (float) trim(fgets(STDIN));

echo("Digite o valor do metro quadrado: ");
$valorMetroQuadrado = (float) trim(fgets(STDIN));

function areaTerreno(float $largura, float $altura) : float{
    return $largura * $altura;
}

function precoTerreno(float $areaDoTerreno, float $valorMetroQuadrado ): float{
  return $areaDoTerreno * $valorMetroQuadrado; 
}

$areaDoTerreno = areaTerreno($largura, $altura);
$precoDoTerreno = precoTerreno($areaDoTerreno, $valorMetroQuadrado); 

echo("Area do terreno = $areaDoTerreno \n");
echo("Preço do terreno = $precoDoTerreno");

?>