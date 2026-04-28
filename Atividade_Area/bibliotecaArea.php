<?php

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
