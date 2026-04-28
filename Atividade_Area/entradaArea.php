<?php


require_once "bibliotecaArea.php";

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;

use function Conversão\dolarParaReal;
use function Conversão\euroParaReal;
use function Conversão\pesoParaReal;
use function Conversão\libraParaReal;
use function Conversão\ieneParaReal;


echo "CÁLCULO DE ÁREAS \n";
echo "--------------------------\n";
$resultado = 0;
$lado = 5;
$resultado = areaQuadrado($resultado, $lado);
echo "Área do Quadrado: " . $resultado . "\n";
$base = 10;
$altura = 5;
$resultado = areaRetangulo($resultado, $base, $altura);
echo "Área do Retângulo: " . $resultado . "\n";
$base = 10;
$altura = 5;
$resultado = areaTriangulo($resultado, $base, $altura);
echo "Área do Triângulo: " . $resultado . "\n";
$raio = 5;
$resultado = 0;
$resultado = areaCirculo($resultado, $raio);
echo "Área do Círculo: " . $resultado . "\n";
$baseMaior = 10;
$baseMenor = 5;
$altura = 5;
$resultado = areaTrapezio($baseMaior, $baseMenor, $altura, $resultado);
echo "Área do Trapézio: " . $resultado . "\n";

echo "\nCONVERSÃO DE MOEDAS \n";
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
