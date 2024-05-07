<?php
echo("Dados da primeira pessoa: \n");
echo("Nome: ");
$nome1 = trim(fgets(STDIN));
echo("Idade ");
$idade1 = (int)trim(fgets(STDIN));

echo("Dados da segunda pessoa: \n");
echo("Nome: ");

$nome2 = fgets(STDIN);


echo("Idade ");
$idade2 = (int)trim(fgets(STDIN));

function mediaDeIdades(int $idade1, int $idade2): float{
  return ($idade1 + $idade2) / 2;
}

$media = mediaDeIdades($idade1, $idade2);

var_dump($nome2);

echo("A idade média de $nome1 e  $nome2 é de $media anos");
?>