<?php

require_once "bibliotecaFcotação.php";

use function Conversão\dolarParaReal;
use function Conversão\euroParaReal;
use function Conversão\pesoParaReal;
use function Conversão\libraParaReal;
use function Conversão\ieneParaReal;


$escolha = " ";

while ($escolha != "0") {
    echo "CONVERSÃO DE MOEDAS \n";
    echo "-------------------------------------------------------------\n";
    echo "ESCOLHA UMA OPÇÃO \n";
    echo "1 - Dolar para real\n";
    echo "2 - Euro para Real\n";
    echo "3 - Peso para Real\n";
    echo "4 - Libra para Real\n";
    echo "5 - Iene para Real\n";
    echo "0 - Sair\n";

    $escolha = readline("Escolha uma opção: ");
    switch ($escolha) {
        case "1":
            $dolar = readline("Digite o valor em Dólar: ");
            $cotacao = readline("Digite a cotação do dólar: ");
            $conv = $dolar * $cotacao;
            echo "Dolar para Real: " . $conv . "\n";
            break;

        case "2":
            $euro = readline("Digite o valor em Euro: ");
            $cotacao = readline("Digite a cotação do euro: ");
            $conv = $euro * $cotacao;
            echo "Euro para Real: " . $conv . "\n";
            break;

        case "3":
            $peso = readline("Digite o valor em Peso: ");
            $cotacao = readline("Digite a cotação do peso: ");
            $conv = $peso * $cotacao;
            echo "Peso para Real: " . $conv . "\n";
            break;

        case "4":
            $libra = readline("Digite o valor em Libras: ");
            $cotacao = readline("Digite a cotação da libra: ");
            $conv = $libra * $cotacao;
            echo "Libra para Real: " . $conv . "\n";
            break;

        case "5":
            $iene = readline("Digite o valor em Iene: ");
            $cotacao = readline("Digite a cotação do iene: ");
            $conv = $iene * $cotacao;
            echo "Iene para Real: " . $conv . "\n";
            break;



        case "0";
            echo "opção invalida\n";
            break;
    }
}
