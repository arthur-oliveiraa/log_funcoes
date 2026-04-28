<?php

namespace Conversão {

    function dolarParaReal($dolar, $real, $conv)
    {
        return $conv = $real * $dolar;
    }

    function euroParaReal($euro, $real, $conv)
    {
        return $conv = $euro * $real;
    }

    function pesoParaReal($peso, $real, $conv)
    {
        return  $conv = $peso * $real;
    }
    function libraParaReal($libra, $real, $conv)
    {
        return $conv = $libra * $real;
    }
    function ieneParaReal($iene, $real, $conv)
    {
        return $conv = $iene * $real;
    }
}

namespace geometria {

    function areaQuadrado($resultado, $lado)
    {
        return $resultado = $lado * $lado;
    }

    function areaRetangulo($resultado, $base, $altura)
    {
        return $resultado = $base * $altura;
    }

    function areaTriangulo($resultado, $base, $altura)
    {
        return $resultado = ($base * $altura) / 2;
    }

    function areaCirculo($resultado, $raio)
    {
        return $resultado = 3.14 * ($raio * $raio);
    }
    function areaTrapezio($baseMaior, $baseMenor, $altura, $resultado)
    {
        return $resultado = (($baseMaior + $baseMenor) * $altura) / 2;
    }
}

namespace saude {

    function calcularIMC($peso, $altura, $resultado)
    {
        return $resultado = $peso / ($altura * $altura);
    }


    function valorIdealAgua($peso)
    {
        return $peso * 35;
    }

    function frequenciaCardiacaMaxima($idade)
    {
        return 220 - $idade;
    }
    function converterLibrasParaQuilo($libras)
    {
        return $libras * 0.453592;
    }
    function calcularCaloriasBasais($peso, $idade, $sexo)
    {
        if ($sexo == "masculino") {
            return (10 * $peso) + (6.25 * 180) - (5 * $idade) + 5;
        } else {
            return (10 * $peso) + (6.25 * 160) - (5 * $idade) - 161;
        }
    }
}
