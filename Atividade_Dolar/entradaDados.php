<?php

require_once "bibliotecaFuncoes.php";

use function Conversão\dolarParaReal;
use function Conversão\euroParaReal;
use function Conversão\pesoParaReal;
use function Conversão\libraParaReal;
use function Conversão\ieneParaReal;

echo "CONVERSÃO DE MOEDAS \n";
echo "--------------------------\n";
$dolar = 5.00;
$real = 1.00;
$conv = 0;
$conv = dolarParaReal($dolar, $real, $conv);
echo "Dolar para Real: " . $conv . "\n";
$euro = 5.50;
$conv = euroParaReal($euro, $real, $conv);
echo "Euro para Real: " . $conv . "\n";
$peso = 0.25;
$conv = pesoParaReal($peso, $real, $conv);
echo "Peso para Real: " . $conv . "\n";
$libra = 6.74;
$conv = libraParaReal($libra, $real, $conv);
echo "Libra para Real: " . $conv . "\n";
$iene = 0.31;
$conv = ieneParaReal($iene, $real, $conv);
echo "Iene para Real: " . $conv . "\n";
.