<?php

require_once "bibliotecaFcotação,
php";

use function Conversão\dolarParaReal;
use function Conversão\euroParaReal;
use function Conversão\pesoParaReal;
use function Conversão\libraParaReal;
use function Conversão\ieneParaReal;

$escolha = " ";
$escolhaMoeda = " ";
$escolhaSaude = " ";
$escolhaArea = " ";


while ($escolha != "0") {
    echo "-------------------------------------------------------------\n";
    echo "ESCOLHA UMA OPÇÃO \n";
    echo "1 - CONVERSÃO DE MOEDAS\n";
    echo "2 - CÁLCULO DE SAÚDE \n";
    echo "3 - CÁLCULO DE ÁREAS\n";
    echo "0 - Sair\n";
    $escolha = readline("Escolha uma opção: ");

    switch ($escolha) {
        case "1":
            echo "\nCONVERSÃO DE MOEDAS \n";
            echo "----------------------------------------\n";
            echo "ESCOLHA UMA MOEDA \n";
            echo "1 - Dolar para Real\n";
            echo "2 - Euro para Real\n";
            echo "3 - Peso para Real\n";
            echo "4 - Libra para Real\n";
            echo "5 - Iene para Real\n";
            $escolhaMoeda = readline("Escolha uma moeda: ");

            switch ($escolhaMoeda) {
                case "1":
                    echo "\nDolar para Real \n";
                    echo "--------------------------\n";
                    echo "digite o valor em Dolar: ";
                    $dolar = readline();
                    echo "digite o preço do Dolar: "
                    $conv = dolarParaReal($dolar, $real, $conv);
                    echo "Dolar para Real: " ,
                     $conv ,
                     "\n";
                    break;
                case "2":
                    echo "\nEuro para Real \n";
                    echo "--------------------------\n";
                    echo "digite o valor em Euro: ";
                    $euro = readline();
                    echo "digite o preço do Euro: ";
                    $real = readline();
                    $conv = euroParaReal($euro, $real, $conv);
                    echo "Euro para Real: " ,
                     $conv ,
                     "\n";
                    break;
                case "3":
                    echo "\nPeso para Real \n";
                    echo "--------------------------\n";
                    echo "digite o valor em Peso: ";
                    $peso = readline();
                    echo "digite o preço do Peso: ";
                    $real = readline();
                    $conv = pesoParaReal($peso, $real, $conv);
                    echo "Peso para Real: " ,
                     $conv ,
                     "\n";
                    break;
                case "4":
                    echo "\nLibra para Real \n";
                    echo "--------------------------\n";
                    echo "digite o valor em Libra: ";
                    $libra = readline();
                    echo "digite o preço da Libra: ";
                    $real = readline();
                    $conv = libraParaReal($libra, $real, $conv);
                    echo "Libra para Real: " ,
                     $conv ,
                     "\n";
                    break;
                case "5":
                    echo "\nIene para Real \n";
                    echo "--------------------------\n";
                    echo "digite o valor em Iene: ";
                    $iene = readline();
                    echo "digite o preço da Iene: ";
                    $real = readline();
                    $conv = ieneParaReal($iene, $real, $conv);
                    echo "Iene para Real: " ,
                     $conv ,
                     "\n";
                    break;
                default:
                    echo "Opção inválida\n";
                    break;
            }
            break;

        case "2":
            echo "\nCÁLCULO DE SAÚDE \n";
            echo "--------------------------\n";
            echo "ESCOLHA UMA OPÇÃO \n";
            echo "1 - Calcular IMC\n";
            echo "2 - Valor Ideal de Água\n";
            echo "3 - Frequência Cardíaca Máxima\n";
            echo "4 - Converter Libras para Quilo\n";
            echo "5 - Calcular Calorias Basais\n";
            $escolhaSaude = readline("Escolha uma opção: ");

            switch ($escolhaSaude) {
                case "1":
                    echo "\nCÁLCULO DE SAÚDE \n";
                    echo "--------------------------\n";
                    echo "Digite o peso: ";
                    $peso = readline();
                    echo "Digite a altura: ";
                    $altura = readline();
                    $resultado = calcularIMC($peso, $altura, $resultado);
                    echo "IMC: " ,
                     $resultado ,
                     "\n";
                    break;
                case "2":
                    echo "\nValor Ideal de Água \n";
                    echo "--------------------------\n";
                    echo "Digite o peso: ";
                    $peso = readline();
                    $resultado = valorIdealAgua($peso);
                    echo "Valor ideal de água: " ,
                     $resultado ,
                     " ml\n";
                    break;
                case "3":
                    echo "\nFrequência Cardíaca Máxima \n";
                    echo "--------------------------\n";
                    echo "Digite a idade: ";
                    $idade = readline();
                    $resultado = frequenciaCardiacaMaxima($idade);
                    echo "Frequência Cardíaca Máxima: " ,
                     $resultado ,
                     "\n";
                    break;
                case "4":
                    echo "\nConverter Libras para Quilo \n";
                    echo "--------------------------\n";
                    echo "Digite o peso em Libras: ";
                    $libras = readline();
                    $resultado = converterLibrasParaQuilo($libras);
                    echo "Peso em kg: " ,
                     $resultado ,
                     " kg\n";
                    break;
                case "5":
                    echo "\nCalcular Calorias Basais \n";
                    echo "--------------------------\n";
                    echo "Digite o peso: ";
                    $peso = readline();
                    echo "Digite a idade: ";
                    $idade = readline();
                    echo "Digite o sexo (masculino/feminino): ";
                    $sexo = readline();
                    $resultado = calcularCaloriasBasais($peso, $idade, $sexo);
                    echo "Calorias Basais: " ,
                     $resultado ,
                     "\n";
                    break;
                default:
                    echo "Opção inválida\n";
                    break;
            }
            break;

        case "3":
            echo "\nCÁLCULO DE ÁREAS \n";
            echo "--------------------------\n";
            echo "ESCOLHA UMA OPÇÃO \n";
            echo "1 - Área do Quadrado\n";
            echo "2 - Área do Retângulo\n";
            echo "3 - Área do Triângulo\n";
            echo "4 - Área do Círculo\n";
            echo "5 - Área do Trapézio\n";
            $escolhaArea = readline("Escolha uma opção: ");

            switch ($escolhaArea) {
                case "1":
                    echo "\nÁrea do Quadrado \n";
                    echo "--------------------------\n";
                    echo "Digite o lado: ";
                    $lado = readline();
                    $resultado = areaQuadrado($resultado, $lado);
                    echo "Área do Quadrado: " , $resultado , "\n";
                    break;
                case "2":
                    echo "\nÁrea do Retângulo \n";
                    echo "--------------------------\n";
                    echo "Digite a base: ";
                    $base = readline();
                    echo "Digite a altura: ";
                    $altura = readline();
                    $resultado = areaRetangulo($resultado, $base, $altura);
                    echo "Área do Retângulo: " , $resultado , "\n";
                    break;
                case "3":
                    echo "\nÁrea do Triângulo \n";
                    echo "--------------------------\n";
                    echo "Digite a base: ";
                    $base = readline();
                    echo "Digite a altura: ";
                    $altura = readline();
                    $resultado = areaTriangulo($resultado, $base, $altura);
                    echo "Área do Triângulo: " , $resultado , "\n";
                    break;
                case "4":
                    echo "\nÁrea do Círculo \n";
                    echo "--------------------------\n";
                    echo "Digite o raio: ";
                    $raio = readline();
                    $resultado = 0;
                    $resultado = areaCirculo($resultado, $raio);
                    echo "Área do Círculo: " ,
                     $resultado ,
                     "\n";
                    break;
                case "5":
                    echo "\nÁrea do Trapézio \n";
                    echo "--------------------------\n";
                    echo "Digite a base maior: ";
                    $baseMaior = readline();
                    echo "Digite a base menor: ";
                    $baseMenor = readline();
                    echo "Digite a altura: ";
                    $altura = readline();
                    $resultado = 0;
                    $resultado = areaTrapezio($baseMaior, $baseMenor, $altura, $resultado);
                    echo "Área do Trapézio: " ,
                     $resultado ,
                     "\n";
                    break;
                default:
                    echo "Opção inválida\n";
                    break;
            }
            break;

        case "0":
            echo "Saindo,
            \n";
            break;

        default:
            echo "Opção inválida\n";
            break;
    }
}
