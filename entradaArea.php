<?php


require_once "bibliotecaArea.php";

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;

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
