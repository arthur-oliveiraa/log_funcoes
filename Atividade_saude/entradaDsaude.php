<?php

require_once "bibliotecaFsaude.php";

use function saude\calcularIMC;
use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;

echo "CÁLCULO DE SAÚDE \n";
echo "--------------------------\n";
$peso = 70;
$altura = 1.75;
$resultado = 0;
$resultado = calcularIMC($peso, $altura, $resultado);
echo "IMC: " . $resultado . "\n";
$resultado = valorIdealAgua($peso);
echo "Valor ideal de água: " . $resultado . " ml\n";
$idade = 30;
$resultado = frequenciaCardiacaMaxima($idade);
echo "Frequência Cardíaca Máxima: " . $resultado . " \n";
$libras = 150;
$resultado = converterLibrasParaQuilo($libras);
echo "Peso em kg: " . $resultado . " kg\n";
$sexo = "masculino";
$resultado = calcularCaloriasBasais($peso, $idade, $sexo);
echo "Calorias Basais: " . $resultado . " \n";
