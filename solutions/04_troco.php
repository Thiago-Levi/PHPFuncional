<?php

$precoUnitario = 8.00;
$quantidade = 2;

$dinheroRecebido = 20.00;

function troco(float $precoUnitario, int $quantidade, float $dinheroRecebido):float {
  return $dinheroRecebido - ($precoUnitario * $quantidade);
};

$troco = troco($precoUnitario, $quantidade, $dinheroRecebido);

echo("Troco: $troco")

?>