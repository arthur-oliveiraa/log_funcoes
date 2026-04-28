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
