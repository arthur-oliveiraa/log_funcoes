<?php

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
